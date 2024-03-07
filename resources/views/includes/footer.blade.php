<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <footer>
        <section id="footer-top" class="wrapper">
            <div class="row">
                @foreach ($menus=config('footer_menu') as $menu)                    
                <div class="col">
                    <h4>{{ $menu['title'] }}</h4>
                    <ul>
                        @foreach ($menu['links'] as $link)                            
                        <li>
                            <a href="{{$link['href']}}">{{ $link['text'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </section>
        <section id="footer-bottom">
            <nav class="wrapper flex">
                <div id="footer-bottom-nav-left">
                    <a href="#" class="btn btn-signup">SIGN-UP NOW!</a>
                </div>
                <div id="footer-bottom-nav-right">
                    <ul>
                        <li><a href="#" class="follow-btn">FOLLOW US</a></li>
                        <li v-for="(icon, i) in icons" :key="i">
                            <a :href="icon.href"><img :src="iconPath" :alt="icon.name"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
    </footer>
</body>
</html>