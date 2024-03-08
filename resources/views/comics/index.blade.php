@extends('layouts.main_templates')

@section('title','Home')

@section('main')

<main>
    <section class="jumbotron">
    </section>
    <section class="wrapper flex flex-column position-relative">
        <div class="row">
            @foreach ($comics=config('comics') as $index => $comic)                
            <div class="card">
                <a href="{{route('comics', $index)}}">
                    <div class="card-img">
                    <img src="{{asset($comic['thumb'])}}" alt="{{$comic['series']}}">
                    </div>
                    <div class="card-text">{{$comic['series']}}</div>
                </a>
            </div>
            @endforeach
        </div>
        <a href="" class="btn btn-more">LOAD MORE</a>
        <div class="btn btn-label"> CURRENT SERIES</div>
    </section>
</main>

@include('includes.blue_section')
@endsection