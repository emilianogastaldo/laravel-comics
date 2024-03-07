
<header>
    <div class="wrapper flex">
        <figure>
            <a href="#"><img src="{{asset('images/dc-logo.png')}}" alt="DC Logo"></a>
        </figure>
        <nav>
            <ul class="flex">
                @foreach ( $links = config('header_links') as $link )
                <li>
                    <a href="{{$link['url']}}">{{$link['text']}}</a>
                </li>                    
                @endforeach
            </ul>
        </nav>
    </div>
</header>