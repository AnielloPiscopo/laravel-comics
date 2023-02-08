@extends('layouts.app')

@section('main-content')
<section id="jumbotron">
    <div class="background"></div>

    <section id="comics-container" class="container p-relative">
        <h2 class="title text-uppercase p-absolute">Current Series</h2>

        <div class="comics-container d-flex wrap">
            <article class="card">
                <a href="#">
                    <div class="img-container">
                        <img src="thumb" alt="series" title="series + '\nPrice:' + price">
                    </div>
                    <span class="text-uppercase"></span>
                </a>
            </article>
        </div>

        <div class="btn-container d-flex justify-center">
            <a href="#" class="btn text-uppercase">Load More</a>
        </div>
    </section>
</section>
@endsection

@section('styles')
<link rel="stylesheet" href="{{Vite::asset('resources/scss/sections/home.scss')}}">
@endsection