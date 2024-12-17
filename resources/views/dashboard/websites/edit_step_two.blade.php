@extends('layouts.dashboard')

@section('title', 'Edit Website - Step 2')

@section('content')
<div class="container is-fluid">
    <br>
    <h1 class="title">Edit Website - Step 2</h1>

    <form action="{{ route('websites.update', $website->id) }}" method="POST">
        @csrf 
        @method('PUT')

        <input type="hidden" name="name" value="{{ old('name', $website->name) }}">
        <input type="hidden" name="url" value="{{ old('url', $website->url) }}">
        <input type="hidden" name="description" value="{{ old('description', $website->description) }}">

        <div class="field">
            <label class="label" for="category">Category</label>
            <div class="control">
                <input class="input" type="text" name="category" id="category" value="{{ old('category', $website->category) }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="traffic">Traffic</label>
            <div class="control">
                <input class="input" type="number" name="traffic" id="traffic" value="{{ old('traffic', $website->traffic) }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="ad_space_available">Ad Space Available</label>
            <div class="control">
                <input class="input" type="number" name="ad_space_available" id="ad_space_available" value="{{ old('ad_space_available', $website->ad_space_available) }}" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-primary" type="submit">Update Website</button>
            </div>
        </div>
    </form>
</div>
@endsection