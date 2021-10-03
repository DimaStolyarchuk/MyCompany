<?php

namespace App\Http\Controllers\Admin;

use App\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $dataHomes = Home::get();
        return view('admin.home', compact('dataHomes'));
    }

    public function home_form()
    {
        $dataHomes = [];
        return view('admin.home_form', compact('dataHomes'));
    }

    public function savehome(Request $request)
    {
        $request->file('image')->store('unloads', 'public');

        $dataHomes = $request->all();
        Home::updateOrCreate([
            'id' => $dataHomes['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'action' => $dataHomes['action'],
            'priority' => $dataHomes['priority'],

        ]);
        return back();
    }
    public function edit_home($id)
    {
        $dataHomes = Home::where('id', $id)->first();
        return view('admin.home_edit', compact('dataHomes'));
    }

    public function delete_home($id)
    {
        Home::where('id', $id)->delete();
        return back();
    }
}
