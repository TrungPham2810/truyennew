<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookRequest;
use App\Tag;
use App\Translator;
use Illuminate\Http\Request;
use App\Components\Recusive;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    use StoreageImageTrait;
    protected $book;
    protected $recusive;
    protected $tag;
    protected $author;
    protected $translator;

    public function __construct(
        Book $book,
        Recusive $recusive,
        Tag $tag,
        Author $author,
        Translator $translator
    ) {
        $this->book = $book;
        $this->recusive = $recusive;
        $this->tag = $tag;
        $this->author = $author;
        $this->translator = $translator;
    }

    public function handleCategorySelect($id = 0, $currentCategory = 0)
    {
        $htmlSelect = $this->recusive->categoryRecusive($id, $currentCategory);
        return $htmlSelect;
    }

    public function index()
    {
        $data = $this->book->latest()->paginate(10);
        return view('admin.book.list', compact('data'));
    }

    public function create()
    {
        $tags = $this->tag->all();
        $authors = $this->author->all();
        $htmlSelect = $this->handleCategorySelect();
        return view('admin.book.add', compact('htmlSelect', 'tags', 'authors'));
    }

    public function createChapter($id)
    {
        $book = $this->book->find($id);
        $bookId = $book->id;
        $translators = $this->translator->all();
        if ($bookId) {
            return view('admin.chapter.add', compact('book', 'translators'));
        } else {
            $message = "Can't found book to add new chap.";
            return redirect()->route('admin.chapter.create')->with('message', $message);
        }
    }

    public function store(BookRequest $request)
    {
        $message = '';
        try {
            DB::beginTransaction();
            $dataUpload = $this->storageImgUpload($request, 'image_path', 'book');
            $dataInsert = [
                'name' => $request->book_name,
                'url_key' => $request->url_key,
                'category_id' => $request->category_id,
                'author_id' => $request->author_id,
                'description' => $request->description
            ];
            if(!empty($dataUpload)) {
                $dataInsert['image_name'] = $dataUpload['file_name'];
                $dataInsert['image_path'] = $dataUpload['file_path'];
            }
            $book = $this->book->create($dataInsert);

            if($book->id) {
                if($request->tags) {
                    $book->tags()->attach($request->tags);
                }
            }
            $message = 'Create book success.';
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $message = 'Error: ' . $e->getMessage();
            Log::error($message. ' Line: '.$e->getLine());
            return redirect()->route('admin.books.create')->with('message', $message);
        }
        return redirect()->route('admin.books.index')->with('message', $message);
    }

    public function edit($id)
    {
        $book = $this->book->find($id);
        $tags = $this->tag->all();
        $currentTags = [];
        foreach ($book->tags as $item) {
            $currentTags[] = $item->id;
        }

        $authors = $this->author->all();
        $htmlSelect = $this->handleCategorySelect(0, $book->category_id);
        return view('admin.book.edit', compact('book','htmlSelect', 'tags', 'authors', 'currentTags'));
    }

    public function update($id, BookRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataUpdate = [
                'name' => $request->book_name,
                'url_key' => $request->url_key,
                'category_id' => $request->category_id,
                'author_id' => $request->author_id,
                'description' => $request->description
            ];
            $dataUpload = $this->storageImgUpload($request, 'image_path', 'book');
            if(!empty($dataUpload)) {
                $dataUpdate['image_name'] = $dataUpload['file_name'];
                $dataUpdate['image_path'] = $dataUpload['file_path'];
            }
             $this->book->find($id)->update($dataUpdate);
            $book = $this->book->find($id);
            if($book->id) {
                if($request->tags) {
                    $book->tags()->sync($request->tags);
                }
            }
            $message = 'Update Category success.';
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $message = 'Error: ' . $e->getMessage();
            Log::error($message. ' Line: '.$e->getLine());
            return redirect()->route('admin.books.edit', ['id' => $id])->with('message', $message);
        }
        return redirect()->route('admin.books.index')->with('message', $message);
    }


    public function delete($id)
    {
        if ($id) {
            try {
                $book = $this->book->find($id);
                $book->delete();
                $message = 'Delete book success.';
                return response()->json([
                    'code' => 200,
                    'message' => $message
                ], 200);
            } catch (\Exception $e) {
                $message = 'Error: ' . $e->getMessage();
                return response()->json([
                    'code' => 500,
                    'message' => $message
                ]);
            }
        } else {
            $message = 'Can\'t found item to delete.';
            return response()->json([
                'code' => 500,
                'message' => $message
            ]);
        }
    }
}
