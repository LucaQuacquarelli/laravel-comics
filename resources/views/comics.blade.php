@extends('layout.site')

@section('comics-header')
<header>
    <div class="info-header"></div>
    @include('partials.nav')
    <div class="jbt"></div>
</header>
@endsection

@section('comics-main')
    @include('comics-section')
@endsection
