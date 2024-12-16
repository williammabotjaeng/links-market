@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
<div class="container is-fluid has-text-centered is-align-content-center is-justify-content-center" style="height: 100vh;">
    <div class="columns is-centered">
        <div class="column is-8">
            <div class="card">
                <div class="card-content">
                    <div class="columns">
                        <div class="column is-half has-background-info has-text-white p-5" style="background: linear-gradient(to right, #00b3b3, rgb(47, 161, 161), #008c8c); border-radius: 4px">
                            <h2 class="title has-text-white">Automated Notifications</h2>
                            <p>Stay informed with automatic email notifications for task assignments and completions. Our system ensures that you never miss an important update, allowing you to focus on what matters most.</p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="mt-4">
                                <p class="has-text-white">Remembered your password? <a href="{{ route('login') }}" class="has-text-white has-text-weight-bold">Login</a></p>
                            </div>
                        </div>
                        <div class="column is-half is-align-content-center">
                            <form action="" method="POST" class="has-text-centered">
                                @csrf
                                <h3 class="title">Forgot Password</h3>
                                <br>
                                <div class="field">
                                    <label class="label" for="email">Email address</label>
                                    <div class="control">
                                        <input type="email" class="input" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <button type="submit" style="background: linear-gradient(to right, #00b3b3, rgb(47, 161, 161), #008c8c); color: white" class="button is-primary">Send Password Reset Link</button>
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