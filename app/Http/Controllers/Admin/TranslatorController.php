<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TranslatorRequest;
use App\Translator;
use Illuminate\Http\Request;

class TranslatorController extends Controller
{
    protected $translator;

    public function __construct(
        Translator $translator
    ) {
        $this->translator = $translator;
    }

    public function index()
    {
        $data = $this->translator->latest()->paginate(20);
        return view('admin.translator.list', compact('data'));
    }

    public function create()
    {
        return view('admin.translator.add');
    }

    public function store(TranslatorRequest $request)
    {
        try {
            $dataInsert = [
                'name' => $request->translator_name,
                'description' => $request->description
            ];
            $this->translator->create($dataInsert);
            $message = 'Create translator success.';
        } catch (\Exception $e) {
            $message = 'Error: ' . $e->getMessage();
            return redirect()->route('admin.translator.create')->with('message', $message);
        }
        return redirect()->route('admin.translator.index')->with('message', $message);
    }

    public function edit($id)
    {
        $translator = $this->translator->find($id);
        return view('admin.translator.edit', compact('translator'));
    }

    public function update($id, TranslatorRequest $request)
    {
        try {
            $dataUpdate = [
                'name' => $request->translator_name,
                'description' => $request->description
            ];

            $this->translator->find($id)->update($dataUpdate);
            $message = 'Update translator success.';
        } catch (\Exception $e) {
            $message = 'Error: ' . $e->getMessage();
            return redirect()->route('admin.translator.edit', ['id' => $id])->with('message', $message);
        }
        return redirect()->route('admin.translator.index')->with('message', $message);
    }

    public function delete($id, Translator $translator)
    {
        if ($id) {
            try {
                if( $this->authorize('delete', $translator)) {
                    $translator = $this->translator->find($id);
                    $translator->delete();
                    $message = 'Delete translator success.';
                    return response()->json([
                        'code' => 200,
                        'message' => $message
                    ], 200);
                }
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
