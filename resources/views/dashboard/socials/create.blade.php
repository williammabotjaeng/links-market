@extends('layouts.dashboard')

@section('title', 'Create Social Account')

@section('content')
<div class="container is-fluid">
    <br>
    <h1 class="title">Create a Social Account</h1>

    <form action="{{ route('socials.store') }}" method="POST">
        @csrf
        <div class="field">
            <label class="label" for="platform">Platform</label>
            <div class="control">
                <div class="select">
                    <select name="platform" id="platform" required>
                        <option value="" disabled selected>Select a platform</option>
                        <option value="Twitter">Twitter</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Instagram">Instagram</option>
                        <option value="YouTube">YouTube</option>
                        <option value="LinkedIn">LinkedIn</option>
                        <option value="TikTok">TikTok</option>
                        <option value="Snapchat">Snapchat</option>
                        <option value="Threads">Threads</option>
                        <!-- Add more platforms as needed -->
                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label" for="account_handle">Account Handle</label>
            <div class="control">
                <input type="text" name="account_handle" id="account_handle" class="input" placeholder="@username" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-primary">Create Social Account</button>
            </div>
        </div>
    </form>
</div>
@endsection