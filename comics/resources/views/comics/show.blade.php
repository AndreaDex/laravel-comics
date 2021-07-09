<?php

$artists = $comic['artists'];
$writers = $comic['writers'];

?>
@extends('layout.app')

@section('title', 'Comics')

@section('content')
<div class="show">

    <div class="details">
        <div class="cover">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
        <div class="container_small">


            <div class="description">
                <h2>{{$comic['title']}}</h2>

                <div class="buy">
                    <div class="buy_price">
                        <span>US price : </span>
                        <span class="price">{{$comic['price']}}</span>
                    </div>
                    <div class="buy_status">
                        <span>AVAIBLE</span>
                        <div class="buy_now">
                            <a href="#">Check Availability</a>

                        </div>
                    </div>

                </div>
                <div class="synopsis">
                    <p>
                        {{$comic['description']}}
                    </p>

                </div>
            </div>


            <div class="advertisement">
                <img src="{{asset('img/advert.jpg')}}" alt="adv">
            </div>


        </div>

        <div class="info">
            <div class="container_small">

                <div class="talent">
                    <h2>Talent</h2>
                    <div class="field">
                        <div class="field_lable">
                            <span>Art by:</span>
                        </div>
                        <div class="field_text">

                            @foreach ($artists as $artist)

                            <span>{{$artist}}, </span>

                            @endforeach


                        </div>
                    </div>

                    <div class="field">
                        <div class="field_lable">
                            <span>Written by:</span>
                        </div>
                        <div class="field_text">

                            @foreach ($writers as $writer)

                            <span>{{$writer}}, </span>

                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="specs">
                    <h2>Specs</h2>

                    <div class="field">
                        <div class="field_lable">
                            <span>Art by:</span>
                        </div>
                        <div class="field_text">

                            @foreach ($artists as $artist)

                            <span>{{$artist}}, </span>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>





@endsection