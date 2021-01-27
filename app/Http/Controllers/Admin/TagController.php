<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagRequest;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $tag;

    public function __construct(
        Tag $tag
    ) {
        $this->tag = $tag;
    }

    public function index()
    {
        $data = $this->tag->latest()->paginate(10);
        return view('admin.tag.list', compact('data'));
    }

    public function create()
    {
        return view('admin.tag.add');
    }

    public function store(TagRequest $request)
    {
        $message = '';
        try {
            $dataInsert = [
                'name' => $request->tag_name,
                'url_key' => $request->url_key,
            ];
            $this->tag->create($dataInsert);
            $message = 'Create tag success.';
        } catch (\Exception $e) {
            $message = 'Error: ' . $e->getMessage();
            return redirect()->route('admin.tags.create')->with('message', $message);
        }
        return redirect()->route('admin.tags.index')->with('message', $message);
    }

    public function edit($id)
    {
        $tag = $this->tag->find($id);
        return view('admin.tag.edit', compact('tag'));
    }

    public function update($id, TagRequest $request)
    {
        try {
            $dataUpdate = [
                'name' => $request->tag_name,
                'url_key' => $request->url_key,
            ];
            $this->tag->find($id)->update($dataUpdate);
            $message = 'Update Tag success.';
        } catch (\Exception $e) {
            $message = 'Error: ' . $e->getMessage();
            return redirect()->route('admin.tags.edit', ['id' => $id])->with('message', $message);
        }
        return redirect()->route('admin.tags.index')->with('message', $message);
    }

    public function delete($id)
    {
        if ($id) {
            try {
                $product = $this->tag->find($id);
                $product->delete();
                $message = 'Delete tag success.';
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
