<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DC UNIVERSE')</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,regular,500,700,900" rel="stylesheet" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>

    <header id="site_header"></header>
    <div id="dc_power">
        <div class="container">

            <span>DC POWER&trade; VISA&copy;</span>

            <span>additional sites &triangledown;</span>

        </div>
    </div>
    <!-- /Dc power -->
    <div class="container">
        <nav class="menu">
            <img src="{{asset('img/dc-logo.png')}}" alt="" class="logo">
            <ul class="links">
                <li><a href="{{route('characters')}}" class="{{Route::currentRouteName() == 'characters' ? 'active' : ''}}">Characters</a></li>
                <li><a href="{{route('comics')}}" class="{{Route::currentRouteName() == 'comics' ? 'active' : ''}}">Comics</a></li>
                <li><a href="{{route('movie')}}">Movies</a></li>
                <li><a href="">Tv</a></li>
                <li><a href="">Games</a></li>
                <li><a href="">Collectibles</a></li>
                <li><a href="">Videos</a></li>
                <li><a href="">Fans</a></li>
                <li><a href="">News</a></li>
                <li><a href="">Shop</a></li>
                <li></li>
            </ul>
            <div class="research">
                <div class="search_block">
                    <input type="text" name="search" id="search" placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </nav>
    </div>
    </header>

    <main id="site_main">
        @yield('content')
    </main>

    <footer id="site_footer">
        <div class="footer_top">
            <section>
                <h2>dc comics</h2>
                <ul class="footer_link">
                    <li><a href="">Characters</a></li>
                    <li><a href="">Comics</a></li>
                    <li><a href="">Movies</a></li>
                    <li><a href="">Tv</a></li>
                    <li><a href="">Games</a></li>
                    <li><a href="">Videos</a></li>
                    <li><a href="">News</a></li>
                </ul>
                <section>
                    <h2>shop</h2>
                    <ul class="footer_link">
                        <li><a href="">Shop DC</a></li>
                        <li><a href="">Shop DC Collectibles</a></li>
                    </ul>
                </section>

            </section>

            <section>
                <h2>dc</h2>
            </section>

            <section>
                <h2>sites</h2>
            </section>
        </div>
        <div class="footer_btm">
        </div>
    </footer>
</body>

</html>