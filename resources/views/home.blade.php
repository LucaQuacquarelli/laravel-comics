@extends('layout.site')

@section('home-header')
<header>
    <div class="info-header"></div>
    @include('partials.nav')
</header>
@endsection

@section('home-main')
<main>
    <div class="container">
        <div class="title">
            <h1>welcome to . . .</h1>
            <p>Read :</p>
            <a href="/comics">comics</a>
        </div>
        <img src="{{asset("images/dc-logo-bg.png")}}" alt="">
    </div>
</main>
@endsection