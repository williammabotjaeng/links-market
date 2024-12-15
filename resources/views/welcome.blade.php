@extends('layouts.welcome')

@section('title', 'Welcome to LinksMarket')

@section('content')
    <div>
        <div class="is-centered has-text-centered is-justify-content-center is-align-content-center" style="background-color: rgba(0, 140, 140, 0.5); height: 90vh">
            <div class="container has-text-centered">
                <h1 class="title has-text-white">Welcome to LinksMarket!</h1>
                <p class="subtitle has-text-white">Where Publishers Meet Buyers—Effortlessly.</p>
                <p class="has-text-white">Explore our features and services tailored for publishers and buyers.</p>
                <br>
                <a class="button is-large is-light" href="{{ route('register') }}">Let's Get Started</a>
            </div>
        </div>
    </div>
@endsection