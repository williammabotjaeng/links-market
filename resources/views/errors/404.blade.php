@extends('layouts.auth')

@section('title', '404 Not Found')

@section('content')
<div class="container is-fluid has-text-centered is-align-content-center is-justify-content-center" style="height: 100vh;">
    <div class="columns is-centered">
        <div class="column is-6">
            <div class="card">
                <div class="card-content">
                    <div class="has-text-centered">
                        <i class="fas fa-exclamation-triangle fa-5x has-text-danger"></i>
                        <h2 class="title has-text-danger">404 Not Found</h2>
                        <p class="subtitle">Oops! The page you are looking for does not exist.</p>
                        <i class="fas fa-broken-heart fa-5x has-text-grey"></i>
                        <br><br>
                        <p>It seems that something is broken. Please check the URL or return to the homepage.</p>
                        <a href="{{ route('home') }}" class="button is-primary mt-4">Go to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection