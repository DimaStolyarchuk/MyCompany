<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $dataNews = News::get();
        return view('admin.news', compact('dataNews'));
    }

    public function news_form()
    {
        $dataNews = [];
        return view('admin.news_form', compact('dataNews'));
    }

    public function savenews(Request $request)
    {
        $request->file('image')->store('unloads', 'public');

        $dataNews = $request->all();
        News::updateOrCreate([
            'id' => $dataNews['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'title' => $dataNews['title'],
            'description' => $dataNews['description'],
            'action' => $dataNews['action'],
            'priority' => $dataNews['priority'],

        ]);
        return back();
    }
    public function edit_news($id)
    {
        $dataNews = News::where('id', $id)->first();
        return view('admin.news_edit', compact('dataNews'));
    }

    public function delete_news($id)
    {
        News::where('id', $id)->delete();
        return back();
    }
}
