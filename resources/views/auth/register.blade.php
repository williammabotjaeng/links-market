@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="container is-fluid has-text-centered is-align-content-center is-justify-content-center" style="height: 100vh;">
    <div class="columns is-centered">
        <div class="column is-8">
            <div class="card">
                <div class="card-content">
                    <div class="columns">
                        <div class="column is-half has-background-info has-text-white p-5" style="background: linear-gradient(to right, #00b3b3,rgb(47, 161, 161), #008c8c);; border-radius: 4px">
                            <h2 class="title has-text-white">Join Us Today!</h2>
                            <p>Create an account to grow your business today. It's quick and easy!</p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="mt-4">
                                <p class="has-text-white">Already have an account? <a href="{{ route('login') }}" class="has-text-white has-text-weight-bold">Login</a></p>
                            </div>
                        </div>
                        <div class="column is-half">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="field">
                                    <label class="label" for="name">Name</label>
                                    <div class="control">
                                        <input type="text" class="input" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label" for="email">Email address</label>
                                    <div class="control">
                                        <input type="email" class="input" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label" for="password">Password</label>
                                    <div class="control">
                                        <input type="password" class="input" id="password" name="password" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label" for="password_confirmation">Confirm Password</label>
                                    <div class="control">
                                        <input type="password" class="input" id="password_confirmation" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <button type="submit" style="background: linear-gradient(to right, #00b3b3,rgb(47, 161, 161), #008c8c);; color: white" class="button is-primary">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection