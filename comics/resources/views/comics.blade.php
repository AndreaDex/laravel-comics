@extends('layout.app')

@section('title', 'Comics')

@section('content')
<div class="main_comics">
    <div class="container">
        <section>
            <h2>CURRENT SERIES</h2>
            <div class="gallery">
                <!-- Comic card -->
                @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="">
                    <h4>{{$comic['title']}}</h4>
                </div>
                @endforeach
                <!-- /Comic card -->
            </div>
            <!-- /Gallery -->

            <div class="load">
                <button class="more">
                    <a href="#"> load more</a>
                </button>
            </div>
        </section>
    </div>

    <div class="panel">
        <div class="container">
            <ul class="panel_list">
                <li>
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                    <a href="">digital comics</a>
                </li>
                <li>
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                    <a href="">dc merchandise</a>
                </li>
                <li>
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                    <a href=""> subscription</a>
                </li>
                <li>
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                    <a href="">comic shop locator</a>
                </li>
                <li>
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                    <a href="">dc power visa</a>
                </li>
            </ul>



        </div>
    </div>
    <!-- /.panel -->
</div>
@endsection