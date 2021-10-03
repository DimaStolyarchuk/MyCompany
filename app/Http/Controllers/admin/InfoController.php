<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function info()
    {
        $dataInfos = Info::get();
        return view('admin.info', compact('dataInfos'));
    }

    public function info_form()
    {
        $dataInfos = [];
        return view('admin.info_form', compact('dataInfos'));
    }

    public function saveinfo(Request $request)
    {
        $request->file('image')->store('unloads', 'public');

        $dataInfos = $request->all();
        Info::updateOrCreate([
            'id' => $dataInfos['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'title' => $dataInfos['title'],
            'second_title' => $dataInfos['second_title'],
            'description' => $dataInfos['description'],
            'action' => $dataInfos['action'],
            'priority' => $dataInfos['priority'],

        ]);
        return back();
    }
    public function edit_info($id)
    {
        $dataInfos = Info::where('id', $id)->first();
        return view('admin.info_edit', compact('dataInfos'));
    }

    public function delete_info($id)
    {
        Info::where('id', $id)->delete();
        return back();
    }
}
