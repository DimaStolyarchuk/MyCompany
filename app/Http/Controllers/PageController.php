<?php

namespace App\Http\Controllers;

use App\Home;
use App\Info;
use App\News;
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
}
