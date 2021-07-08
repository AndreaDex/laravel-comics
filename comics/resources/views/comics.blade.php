@extends('layout.app')

@section('title', 'Comics')

@section('content')
<div class="main_comics">
    <div class="container">
        <section>
            <h2>CURRENT SERIES</h2>
            <div class="gallery">
                @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="">
                    <h4>{{$comic['title']}}</h4>
                </div>


                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection