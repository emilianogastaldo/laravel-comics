<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>    
    <header>
        <div class="wrapper flex">
            <figure>
                <a href="#"><img src="{{asset('images/dc-logo.png')}}" alt="DC Logo"></a>
            </figure>
            <nav>
                <ul class="flex">
                    @foreach ( $links = config('header_links') as $link )
                    <li>
                        <a href="{{$link['url']}}" class="{{Route::is($link['text'])}}">{{$link['text']}}</a>
                    </li>                    
                    @endforeach
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>