<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function table()
    {
        $dataTables = Table::get();
        return view('admin.table', compact('dataTables'));
    }

    public function table_form()
    {
        $dataTables = [];
        return view('admin.table_form', compact('dataTables'));
    }

    public function savetable(Request $request)
    {
        $dataTables = $request->all();
        Table::updateOrCreate([
            'id' => $dataTables['id'],
        ],[
            'title' => $dataTables['title'],
            'first_header' => $dataTables['first_header'],
            'second_header' => $dataTables['second_header'],
            'third_header' => $dataTables['third_header'],
            'quarters_header' => $dataTables['quarters_header'],
            'action' => $dataTables['action'],
            'priority' => $dataTables['priority'],
        ]);
        return back();
    }
    public function edit_table($id)
    {
        $dataTables = Table::where('id', $id)->first();
        return view('admin.table_edit', compact('dataTables'));
    }

    public function delete_table($id)
    {
        Table::where('id', $id)->delete();
        return back();
    }
}
