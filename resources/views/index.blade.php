<html xmlns="http://www.w3.org/1999/xhtml">
@extends('layouts')
<body id="top">
@include('header')
<div class="wrapper col2">
    <div id="gallery">
        <ul>
            @foreach($dataHomes as $dataHome)
                @if($loop->first)
                <li class="placeholder" style="background-image:url({{ asset('storage/'. $dataHome->image) }});">Image Holder</li>
                @else
                <li><a class="swap" style="background-image:url({{ asset('storage/'. $dataHome->image) }});" href="#gallery"><strong>Services</strong><span><img src="{{ asset('storage/'. $dataHome->image) }}" alt="" /></span></a></li>
                @endif
            @endforeach
        </ul>
        <div class="clear"></div>
    </div>
</div>
<div class="wrapper col4">
    <div id="container">
        <div id="content">
            @foreach($dataInfos as $dataInfo)
                @if($loop->first)
            <h1>{{ $dataInfo->title }}</h1>
                @endif
            @endforeach
            <p>My Company піклується про всіх наших клієнтів і прагне полегшити й поліпшити спеціальні можливості та зручність
                використання свого веб-сайту <a href="http://www.os-templates.com/">OS Templates</a>.</p>
            <p>Початкова робота із запровадження спеціальних можливостей була завершена
                (тестування проводилося як за допомогою автоматичних засобів тестування
                спеціальних можливостей, так і за допомогою користувачів засобів озвучування змісту екрану, для виявлення помилок).</p>
            <p>Будь ласка, зверніть увагу, що наша робота над підтримкою спеціальних можливостей та зручності використання триває.
                Хоча ми прагнемо зробити веб-сайт максимально доступним, можуть виникати певні проблеми із різними допоміжними
                технологіями, оскільки спектр допоміжних технологій широкий і різноманітний. Вдячні за ваше розуміння.</p>
            <div class="homecontent">
                <ul>
                    @foreach($dataInfos as $dataInfo)
                    <li>
                        <p class="imgholder"><img src="{{ asset('storage/'. $dataInfo->image) }}" alt="" /></p>
                        <h2>{{ $dataInfo->second_title }}</h2>
                        <p>{{ $dataInfo->description }}</p>
                    </li>
                    @endforeach
                </ul>
                <div class="clear"></div>
            </div>
            <p>Якщо в будь-який час у вас виникнуть конкретні запитання або побоювання з приводу доступності будь-якої конкретної
                веб-сторінки на веб-сайті, будь ласка, зв'яжіться з нами електронною поштою за адресою My_company@gmail.com
                або телефоном: (097) 111 11 11.</p>

        </div>
        @foreach($dataNews as $dataNew)
        <div id="column">
            <div id="featured">
                <ul>
                    <li>
                        @if($loop->first)
                        <h2>{{ $dataNew->title }}</h2>
                        @endif
                        <p class="imgholder"><img src="{{ asset('storage/'. $dataNew->image) }}" alt="" /></p>
                        <p>{{ $dataNew->description }}</p>
{{--                        <p class="more"><a href="#">Read More &raquo;</a></p>--}}
                    </li>
                </ul>
            </div>
        </div>
        @endforeach
        <div class="clear"></div>
    </div>
</div>
@include('second_header')
</body>
</html>
