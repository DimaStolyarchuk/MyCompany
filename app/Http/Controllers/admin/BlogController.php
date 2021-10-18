<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $dataBlogs = Blog::get();
        return view('admin.blog', compact('dataBlogs'));
    }

    public function blog_form()
    {
        $dataBlogs = [];
        return view('admin.blog_form', compact('dataBlogs'));
    }

    public function saveblog(Request $request)
    {
        $dataBlogs = $request->all();
        Blog::updateOrCreate([
            'id' => $dataBlogs['id'],
        ],[
            'title' => $dataBlogs['title'],
            'news' => $dataBlogs['news'],
            'description' => $dataBlogs['description'],
            'action' => $dataBlogs['action'],
            'priority' => $dataBlogs['priority'],

        ]);
        return back();
    }
    public function edit_blog($id)
    {
        $dataBlogs = Blog::where('id', $id)->first();
        return view('admin.blog_edit', compact('dataBlogs'));
    }

    public function delete_blog($id)
    {
        Blog::where('id', $id)->delete();
        return back();
    }
}
