@extends('layouts.dashboard')

@section('title', 'Create Website - Step 2')

@section('content')
<div class="container is-fluid">
    <br>
    <h1 class="title">Create a New Website - Step 2</h1>

    <form action="{{ route('websites.store') }}" method="POST">
        @csrf 
        
        <input type="hidden" name="name" value="{{ old('name', $websiteData['name'] ?? '') }}">
        <input type="hidden" name="url" value="{{ old('url', $websiteData['url'] ?? '') }}">
        <input type="hidden" name="description" value="{{ old('description', $websiteData['description'] ?? '') }}">

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