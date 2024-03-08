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
        <div class="wrapper">            
            <div class="text-section">
                <h2>{{$comic['title']}}</h2>
                <div class="flex">
                    <div class="flex comic-available label-available">
                        <p class="color-light-green">US Price: <span class="color-white">{{$comic['price']}}</span></p>
                        <p class="color-light-green">AVAILABLE</p>
                    </div>
                    <div class="color-white label-available">
                        Check Availability <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <p class="description">{{$comic['description']}}</p>
            </div>
            <div class="adv">
                <p>ADVERTISEMENT</p>
                <img src="{{asset('images/adv.jpg')}}" alt="">
            </div>
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