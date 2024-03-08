@extends('layouts.main_templates')
@dump($comic)
@section('title', $comic['title'])
@section('main')
<main class="comic">
    <section class="cover-section">
        <figure>
            <p class="cover-label up-right">COMIC BOOK</p>
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">        
            <p class="cover-label bottom">VIEW GALLERY</p>
        </figure>        
    </section>
    <section class="preview">
        <div class="text-section">
            <h2>{{$comic['title']}}</h2>
            <div>
                <div>
                    <p>US Price: {{$comic['price']}}</p>
                    <p>AVAILABLE</p>
                </div>
                <div>
                    Check Availability
                </div>
            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div class="adv">
            <p>ADV</p>
            <img src="{{asset('images/adv.jpg')}}" alt="">
        </div>
    </section>
    <section class="infos">
        <div class="talent">
            <h2>Talent</h2>
            <ul>
                <li>
                    art
                </li>
                <li>
                    write
                </li>
            </ul>
        </div>
        <div class="specs">
            <h2>SPECS</h2>
            <ul>
                <li>Series</li>
                <li>Price</li>
                <li>Sale date</li>
            </ul>
        </div>
    </section>
</main>  
@endsection