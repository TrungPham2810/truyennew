<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AuthorRequest;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    protected $author;

    public function __construct(
        Author $author
    ) {
        $this->author = $author;
    }

    public function index()
    {
        $data = $this->author->latest()->paginate(20);
        return view('admin.author.list', compact('data'));
    }

    public function create()
    {
        return view('admin.author.add');
    }

    public function store(AuthorRequest $request)
    {
        try {
            $dataInsert = [
                'name' => $request->author_name,
                'url_key' => $request->url_key,
                'description' => $request->description
            ];
            $this->author->create($dataInsert);
            $message = 'Create author success.';
        } catch (\Exception $e) {
            $message = 'Error: ' . $e->getMessage();
            return redirect()->route('admin.author.create')->with('message', $message);
        }
        return redirect()->route('admin.author.index')->with('message', $message);
    }

    public function edit($id)
    {
        $author = $this->author->find($id);
        return view('admin.author.edit', compact('author'));
    }

    public function update($id, AuthorRequest $request)
    {
        try {
            $dataUpdate = [
                'name' => $request->author_name,
                'url_key' => $request->url_key,
                'description' => $request->description
            ];

            $this->author->find($id)->update($dataUpdate);
            $message = 'Update author success.';
        } catch (\Exception $e) {
            $message = 'Error: ' . $e->getMessage();
            return redirect()->route('admin.author.edit', ['id' => $id])->with('message', $message);
        }
        return redirect()->route('admin.author.index')->with('message', $message);
    }

    public function delete($id)
    {
        if ($id) {
            try {
                $author = $this->author->find($id);
                $author->delete();
                $message = 'Delete author success.';
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
