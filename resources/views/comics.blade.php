@extends('layouts.app')

@section('title','Laravel Comics - Comics')

@section('main-content')
<section id="comics-container" class="container p-relative">
    <h2 class="title text-uppercase p-absolute">Current Series</h2>

    <div class="comics-container d-flex wrap">
        
    </div>

    <div class="btn-container d-flex justify-center">
        <a href="#" class="btn text-uppercase">Load More</a>
    </div>
</section>
@endsection

@section('styles')
<link rel="stylesheet" href="{{Vite::asset('resources/scss/sections/comics.scss')}}">
@endsection