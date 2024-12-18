@extends('layouts.dashboard')

@section('title', 'Create Website - Step 1')

@section('content')
<div class="container is-fluid">
    <br>
    <h1 class="title">Create a New Website - Step 1</h1>

    <form action="{{ route('websites.stepOne') }}" method="POST">
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
            <div class="control">
                <button class="button is-primary" type="submit">Next Step</button>
            </div>
        </div>
    </form>
</div>
@endsection