@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="container is-fluid has-text-centered is-align-content-center is-justify-content-center" style="height: 100vh;">
    <div class="columns is-centered">
        <div class="column is-8">
            <div class="card">
                <div class="card-content">
                    <div class="columns">
                        <div class="column is-half has-background-info has-text-white p-5" style="background: linear-gradient(to right, #00b3b3,rgb(47, 161, 161), #008c8c); border-radius: 4px">
                        <h2 class="title has-text-white">Step Into the Spotlight!</h2>
                            <p>Join the ultimate platform to showcase your talent, connect with brands or creators, and take your hustle to the next level. Signing up is fast, easy, and your first step to greatness!</p>
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
                                        <input type="text" class="input @error('name') is-danger @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                    </div>
                                    @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label class="label" for="email">Email address</label>
                                    <div class="control">
                                        <input type="email" class="input @error('email') is-danger @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                    @error('email')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label class="label" for="password">Password</label>
                                    <div class="control">
                                        <input type="password" class="input @error('password') is-danger @enderror" id="password" name="password" required>
                                    </div>
                                    @error('password')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label class="label" for="password_confirmation">Confirm Password</label>
                                    <div class="control">
                                        <input type="password" class="input @error('password_confirmation') is-danger @enderror" id="password_confirmation" name="password_confirmation" required>
                                    </div>
                                    @error('password_confirmation')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label class="label">Select Role</label>
                                    <div class="control">
                                        <div class="field is-grouped is-grouped-multiline">
                                            <label class="radio">
                                                <input type="radio" name="roles" value="brand" required>
                                                Brand
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="roles" value="creator" required>
                                                Creator
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="roles" value="both" required>
                                                Both
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <button type="submit" style="background: linear-gradient(to right, #00b3b3,rgb(47, 161, 161), #008c8c); color: white" class="button is-primary">Register</button>
                                    </div>
                                </div>
                            </form>
                            @if ($errors->any())
                                <div class="notification is-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection