@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="container is-fluid has-text-centered is-align-content-center is-justify-content-center" style="height: 100vh;">
    <div class="columns is-centered">
        <div class="column is-8">
            <div class="card">
                <div class="card-content">
                    <div class="columns">
                        <div class="column is-half has-background-info has-text-white p-5" style="background: linear-gradient(to right, #00b3b3, rgb(47, 161, 161), #008c8c); border-radius: 4px">
                        <h2 class="title has-text-white">Unlocking the Power of Connections</h2> <p>At Party16Bars, we understand that <sgrong>backlinks</strong> are more than just links; they are the bridges that connect influencers to brands.</p>
                            <br>
                            <br>
                            <div class="mt-4">
                                <p class="has-text-white">Don't have an account? <a href="{{ route('register') }}" class="has-text-white has-text-weight-bold">Register</a></p>
                            </div>
                        </div>
                        <div class="column is-half is-align-content-center">
                            <form action="{{ route('login') }}" method="POST" class="has-text-centered">
                                @csrf
                                <h3 class="title">Login</h3>
                                <br>

                                @if (request()->headers->get('referer') && strpos(request()->headers->get('referer'), route('register')) !== false)
                                    <div class="notification is-success">
                                        Registration successful! Please log in.
                                    </div>
                                @endif

                                <div class="field">
                                    <label class="label" for="email">Email address</label>
                                    <div class="control">
                                        <input type="email" class="input" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label" for="password">Password</label>
                                    <div class="control has-icons-right">
                                        <input type="password" class="input" id="password" name="password" required>
                                        <span class="icon is-small is-right" style="cursor: pointer;" id="togglePassword">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field is-flex is-justify-content-space-between">
                                    <div>
                                        <label class="checkbox">
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                    <div>
                                        <a href="/forgot" class="has-text-weight-bold">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <button type="submit" style="background: linear-gradient(to right, #00b3b3, rgb(47, 161, 161), #008c8c); color: white" class="button is-primary">Login</button>
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

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        const icon = this.querySelector('i');
        icon.classList.toggle('fa-eye');
        icon.classList.toggle('fa-eye-slash');
    });
</script>
@endsection