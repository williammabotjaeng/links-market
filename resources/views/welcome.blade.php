@extends('layouts.app')

@section('title', 'Welcome to LinksMarket')

@section('content')
    <div class="container">
        <h1 class="title">Welcome to LinksMarket!</h1>
        <p class="subtitle">Where Publishers Meet Buyers—Effortlessly.</p>
        <p>Explore our features and services tailored for publishers and buyers.</p>
        <p>
            <a class="button is-link" href="{{ route('about') }}">Learn more about us</a>
            <a class="button is-info" href="{{ route('performance.index') }}">View Performance Analytics</a>
            <a class="button is-success" href="{{ route('sponsored.index') }}">Check Sponsored Sites</a>
            <a class="button is-warning" href="{{ route('link-insertions.index') }}">Explore Link Insertions</a>
        </p>
    </div>
@endsection