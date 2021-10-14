<?php

namespace App\Http\Controllers;

use App\About;
use App\Coments;
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
        $dataComents = Coments::get();
        $dataTables = Table::get();
        $dataAbouts = About::get();
        return view('about', compact('dataAbouts', 'dataComents', 'dataTables'));
    }

    public function entry()
    {
        $dataEntry = Entry::get();
        return view('entry',compact('dataEntry'));
    }

    public function blog()
    {
//        $dataHomes = Home::get();
//        $dataInfos = Info::get();
//        $dataNews = News::get();
        return view('blog');
    }
}
