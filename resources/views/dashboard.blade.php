
@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
<div id="main-content" class="row">
    <div class="col-md-8">
        @include('partials.carousel')

        <h1 class="text-center bg-danger mt-3 py-3 col-md-12">TOP TRENDING</h1>

        @include('partials.card')
    </div>
    <div class="col-md-4 mt-3">
        @include('partials.small-carousel')
        @include('partials.exclusive-card-list')
    </div>
</div>
@endsection
