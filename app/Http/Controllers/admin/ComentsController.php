<?php

namespace App\Http\Controllers\admin;

use App\Coments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComentsController extends Controller
{
    public function coments()
    {
        $dataComents = Coments::get();
        return view('admin.coments', compact('dataComents'));
    }

    public function coments_form()
    {
        $dataComents = [];
        return view('admin.coments_form', compact('dataComents'));
    }

    public function savecoments(Request $request)
    {
        $dataComents = $request->all();
        Coments::updateOrCreate([
            'id' => $dataComents['id'],
        ],[
            'title' => $dataComents['title'],
            'first_coments' => $dataComents['first_coments'],
            'second_coments' => $dataComents['second_coments'],
            'third_coments' => $dataComents['third_coments'],
            'action' => $dataComents['action'],
            'priority' => $dataComents['priority'],

        ]);
        return back();
    }
    public function edit_coments($id)
    {
        $dataComents = Coments::where('id', $id)->first();
        return view('admin.coments_edit', compact('dataComents'));
    }

    public function delete_coments($id)
    {
        Coments::where('id', $id)->delete();
        return back();
    }
}
