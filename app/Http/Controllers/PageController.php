<?php

namespace App\Http\Controllers;

use App\About;
use App\Blog;
use App\Coments;
use App\Comments;
use App\Entry;
use App\Home;
use App\Info;
use App\News;
use App\Table;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $dataHomes = Home::get();
        $dataInfos = Info::get();
        $dataNews = News::get();
        return view('index', compact('dataHomes', 'dataInfos', 'dataNews'));
    }

    public function about()
    {
        $dataComments = Comments::get();
        $dataComents = Coments::get();
        $dataTables = Table::get();
        $dataAbouts = About::get();
        return view('about', compact('dataAbouts', 'dataComents', 'dataTables', 'dataComments'));
    }

    public function entry()
    {
        $dataEntry = Entry::get();
        return view('entry',compact('dataEntry'));
    }

    public function blog()
    {
        $dataBlogs = Blog::get();
        return view('blog',compact('dataBlogs'));
    }
}
