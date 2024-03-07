<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
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
                        <a href="{{route($link['url'])}}" class="{{Route::is($link['url'])? 'active' : ''}}">{{$link['text']}}</a>
                    </li>                    
                    @endforeach
                </ul>
            </nav>
            <form>
                <input type="text" placeholder="Search">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </header>
</body>
</html>