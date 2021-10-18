<html xmlns="http://www.w3.org/1999/xhtml">
@extends('layouts')
<body id="top">
@include('header')
{{--<div class="wrapper col2">--}}
{{--    <div id="breadcrumb">--}}
{{--        <ul>--}}
{{--            <li class="first">You Are Here</li>--}}
{{--            <li>&#187;</li>--}}
{{--            <li><a href="#">Home</a></li>--}}
{{--            <li>&#187;</li>--}}
{{--            <li><a href="#">Grand Parent</a></li>--}}
{{--            <li>&#187;</li>--}}
{{--            <li><a href="#">Parent</a></li>--}}
{{--            <li>&#187;</li>--}}
{{--            <li class="current"><a href="#">Child</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="wrapper col4">
    <div id="container">
        @foreach($dataBlogs as $dataBlog)
            @if($loop->first)
        <h1>{{ $dataBlog->title }}</h1>
            @endif
        <p>{{ $dataBlog->news }}</p>
        <ul>
            <li>{{ $dataBlog->description }}.</li>
        </ul>
{{--        <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla. Laoremut vitae doloreet condimentumst phasellentes dolor ut a ipsum id consectetus. Inpede cumst vitae ris tellentesque fring intesquet nibh fames nulla curabitudin.</p>--}}
{{--        <ol>--}}
{{--            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>--}}
{{--            <li>Etiam vel sapien et est adipiscing commodo.</li>--}}
{{--            <li>Duis pharetra eleifend sapien, id faucibus dolor rutrum et.</li>--}}
{{--            <li>Donec et dui dolor, in lacinia leo.</li>--}}
{{--            <li>Mauris posuere tellus ac purus adipiscing dapibus.</li>--}}
{{--        </ol>--}}
                @endforeach
    </div>
</div>
@include('second_header')
</body>
</html>
