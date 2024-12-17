@extends('layouts.dashboard')

@section('title', 'Create Website')

@section('content')
<div class="container is-fluid">
    <br>
    <h1 class="title">Create a New Website</h1>

    <form action="{{ route('websites.store') }}" method="POST">
        @csrf 
        
        <div class="field">
            <label class="label" for="name">Website Name</label>
            <div class="control">
                <input class="input" type="text" name="name" id="name" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="url">Website URL</label>
            <div class="control">
                <input class="input" type="url" name="url" id="url" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea class="textarea" name="description" id="description" required></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="category">Category</label>
            <div class="control">
                <input class="input" type="text" name="category" id="category" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="traffic">Traffic</label>
            <div class="control">
                <input class="input" type="number" name="traffic" id="traffic" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="ad_space_available">Ad Space Available</label>
            <div class="control">
                <input class="input" type="number" name="ad_space_available" id="ad_space_available" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-primary" type="submit">Create Website</button>
            </div>
        </div>
    </form>
</div>
@endsection