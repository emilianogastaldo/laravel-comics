<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="blue-section">
        <ul class="wrapper flex">
            @foreach ($links=config('blue_section_links') as $link)    
            <li>
                <a href="{{$link['url']}}">
                    <img src="{{asset('images/' . $link["img"])}}" alt="{{$link['text']}}">
                    {{ $link['text']}}
                </a>
            </li>
            @endforeach
        </ul>
    </section>
</body>
</html>