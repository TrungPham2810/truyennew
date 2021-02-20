<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Chapter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChapterRequest;
use App\Translator;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    protected $chapter;
    protected $book;
    protected $translator;

    public function __construct(
        Chapter $chapter,
        Book $book,
        Translator $translator
    ) {
        $this->chapter = $chapter;
        $this->book = $book;
        $this->translator = $translator;
    }

    public function index()
    {
        $data = $this->chapter->latest()->paginate(20);
        return view('admin.chapter.list',compact('data'));
    }

    public function create()
    {
        $books = $this->book->all();
        $translators = $this->translator->all();
        return view('admin.chapter.add', compact('books', 'translators'));
    }

    public function store(ChapterRequest $request)
    {
        $message = '';
        try {
            $dataInsert = [
                'name' => $request->chapter_name,
                'url_key' => $request->url_key,
                'book_id' => $request->book_id,
                'translator_id' => $request->translator_id,
                'content'=> $request->content_chapter
            ];
            $this->chapter->create($dataInsert);
            $message = 'Create chapter success.';
        } catch (\Exception $e) {
            if(isset($e->errorInfo[2])) {
                $message = 'Error: ' . $e->errorInfo[2];
            } else {
                $message = 'Error: ' . $e->getMessage();
            }
            return redirect()->route('admin.chapter.create')->with('message', $message);
        }//end try
        return redirect()->route('admin.chapter.index')->with('message', $message);
    }

    public function edit($id)
    {
        $chapter = $this->chapter->find($id);
        $books = $this->book->all();
        $translators = $this->translator->all();
        return view('admin.chapter.edit', compact('chapter', 'books', 'translators'));
    }

    public function update($id, ChapterRequest $request)
    {
        try {
            $dataUpdate = [
                'name' => $request->chapter_name,
                'url_key' => $request->url_key,
                'book_id' => $request->book_id,
                'translator_id' => $request->translator_id,
                'content'=> $request->content_chapter
            ];
            $this->chapter->find($id)->update($dataUpdate);
            $message = 'Update chapter success.';
        } catch (\Exception $e) {
            $message = 'Error: ' . $e->getMessage();
            return redirect()->route('admin.chapter.edit', ['id' => $id])->with('message', $message);
        }//end try
        return redirect()->route('admin.chapter.index')->with('message', $message);
    }

    public function delete($id)
    {
        if ($id) {
            try {
                $chapter = $this->chapter->find($id);
                $chapter->delete();
                $message = 'Delete chapter success.';
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
            }//end try
        } else {
            $message = 'Can\'t found item to delete.';
            return response()->json([
                'code' => 500,
                'message' => $message
            ]);
        }//end if
    }
}
