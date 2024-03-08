@extends('layouts.main_templates')
@dump($comic)
@section('title', $comic['title'])
@section('main')
<main class="comic">
    <section class="cover-section">
        <div class="wrapper">
            <figure >
                <p class="cover-label up-right">COMIC BOOK</p>
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">        
                <p class="cover-label bottom">VIEW GALLERY</p>
            </figure>        
        </div>
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
    <hr>
    <section class="infos">
        <div class="wrapper">
            <div class="talent">
                <h2>Talent</h2>
                <ul>
                    <li class="flex">
                        <div>
                            Art by:
                        </div>
                        <div class="list-people">
                            @foreach ( $comic['artists'] as  $artist)
                                <a href="#">{{$artist}}</a>, 
                                @if($loop->last)
                                    <a href="#">{{$artist}}</a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                    <li class="flex">
                        <div>
                           Written by:
                        </div>
                        <div class="list-people">
                            @foreach ( $comic['writers'] as  $writer)
                                <a href="#">{{$writer}}</a>, 
                                @if($loop->last)
                                    <a href="#">{{$writer}}</a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <ul>
                    <li>Series</li>
                    <li>Price</li>
                    <li>Sale date</li>
                </ul>
            </div>
        </div>
    </section>
</main>  
@endsection