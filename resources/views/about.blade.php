<html xmlns="http://www.w3.org/1999/xhtml">
@extends('layouts')
<body id="top">
@include('header')
<div class="wrapper col4">
    <div id="container">
        <div id="content">
            @foreach($dataAbouts as $dataAbout)
            <h1>{{ $dataAbout->title }}</h1>
            <img class="imgr" src="{{ asset('storage/'. $dataAbout->imageRight) }}" alt="" width="125" height="125" />
            <p>{{ $dataAbout->description }}</p>
            <p>{{ $dataAbout->description }}</p>
            <img class="imgl" src="{{ asset('storage/'. $dataAbout->imageLeft) }}" alt="" width="125" height="125" />
            <p>{{ $dataAbout->description }}</a>.</p>
            <p>{{ $dataAbout->description }}</a>.</p>
            <p>{{ $dataAbout->description }}</p>
            @endforeach

            @foreach($dataTables as $dataTable)
            <h2>{{ $dataTable->title }}</h2>
            <table summary="Summary Here" cellpadding="0" cellspacing="0">
                <thead>
                <tr>
                    <th>{{ $dataTable->first_header }}</th>
                    <th>{{ $dataTable->second_header }}</th>
                    <th>{{ $dataTable->third_header }}</th>
                    <th>{{ $dataTable->quarters_header }}</th>
                </tr>
                </thead>
                <tbody>
                <tr class="light">
                    <td>Value 1</td>
                    <td>Value 2</td>
                    <td>Value 3</td>
                    <td>Value 4</td>
                </tr>
                <tr class="dark">
                    <td>Value 5</td>
                    <td>Value 6</td>
                    <td>Value 7</td>
                    <td>Value 8</td>
                </tr>
                <tr class="light">
                    <td>Value 9</td>
                    <td>Value 10</td>
                    <td>Value 11</td>
                    <td>Value 12</td>
                </tr>
                <tr class="dark">
                    <td>Value 13</td>
                    <td>Value 14</td>
                    <td>Value 15</td>
                    <td>Value 16</td>
                </tr>
                </tbody>
            </table>
            @endforeach
            <div id="comments">
            @foreach($dataComments as $dataComment)
                    @if($loop->first)
                <h2>Коментарі</h2>
                    @endif
                <ul class="commentlist">
                    <li class="comment_odd">
                        <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"> {{ $dataComment->name }}</span> <span class="wrote">написав:</span></div>
                        <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
                        <p>{{ $dataComment->message }}</p>
                    </li>
                </ul>
            @endforeach
            </div>
            <h2>Залишити коментар</h2>
            <div id="respond">
                <form class="main_form" method="post" action="{{ route('save_comments') }}">
                    {{ csrf_field() }}
                    <p>
                        <input type="text" name="name" id="name" value="" size="22" />
                        <label for="name"><small>Ваше імя</small></label>
                    </p>
                    <p>
                        <input type="text" name="email" id="email" value="" size="22" />
                        <label for="email"><small>Ваша електрона адреса</small></label>
                    </p>
                    <p>
                        <textarea name="message" id="message" cols="100%" rows="10"></textarea>
                        <label for="comment" style="display:none;"><small>Ваш коментар</small></label>
                    </p>
                    <div class=" col-md-12">
                        <button class="send">Відправити</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
@include('second_header')
</body>
</html>
