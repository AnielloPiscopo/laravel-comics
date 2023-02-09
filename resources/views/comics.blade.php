@extends('layouts.app')

@section('title','Laravel Comics - Comics')

@section('main-content')
@php
    $imgsPath = 'resources/assets/images/';
    
    $navItems= [
            [
                'text'=> 'Digital Comics',
                'src'=> 'buy-comics-digital-comics.png'
            ],


            [
                'text'=> 'DC Merchandise',
                'src'=> 'buy-comics-merchandise.png'
            ],


            [
                'text'=> 'Subscriptions',
                'src'=> 'buy-comics-subscriptions.png'
            ],


            [
                'text'=> 'Comic Shop Locator',
                'src'=> 'buy-comics-shop-locator.png'
            ],


            [
                'text'=> 'DC Power Visa',
                'src'=> 'buy-dc-power-visa.svg'
            ],
        ]
@endphp

<section id="comics-container" class="container p-relative">
    <h2 class="title text-uppercase p-absolute">Current Series</h2>

    <div class="comics-container d-flex wrap">
        @foreach ($comics as $comic)
        <article class="card">
            <a href="#">
                <div class="img-container">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" title="{{$comic['series']}}">
                </div>
                <span class="text-uppercase">{{ $comic['series'] }}</span>
            </a>
        </article>
        @endforeach
    </div>

    <div class="btn-container d-flex justify-center">
        <a href="#" class="btn text-uppercase">Load More</a>
    </div>
</section>

<nav class="container">
    <ul class="d-flex justify-around align-center">
        @foreach ($navItems as $navItem)
        <li>
            <a href="#" class="d-flex align-center text-uppercase">
                <img src="{{Vite::asset($imgsPath . $navItem['src'])}}" alt="{{$navItem['text']}}">
                <span>{{ $navItem['text'] }}</span>
            </a>
        </li>
        @endforeach
    </ul>
</nav>
@endsection

@section('styles')
<link rel="stylesheet" href="{{Vite::asset('resources/scss/partials/sections/_comics.scss')}}">
@endsection