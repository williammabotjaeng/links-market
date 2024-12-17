@extends('layouts.dashboard')

@section('title', 'Edit Website - Step 1')

@section('content')
<div class="container is-fluid">
    <br>
    <h1 class="title">Edit Website - Step 1</h1>

    <form action="{{ route('websites.stepOneEdit', $website->id) }}" method="POST">
        @csrf 
        
        <div class="field">
            <label class="label" for="name">Website Name</label>
            <div class="control">
                <input class="input" type="text" name="name" id="name" value="{{ old('name', $website->name) }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="url">Website URL</label>
            <div class="control">
                <input class="input" type="url" name="url" id="url" value="{{ old('url', $website->url) }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea class="textarea" name="description" id="description" required>{{ old('description', $website->description) }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-primary" type="submit">Next Step</button>
            </div>
        </div>
    </form>
</div>
@endsection