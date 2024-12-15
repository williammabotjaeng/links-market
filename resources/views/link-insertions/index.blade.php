@extends('layouts.app')

@section('title', 'Link Insertions')

@section('content')
    <div class="link-insertions">
        <h1>Link Insertions</h1>
        <p>Order your link insertions easily:</p>
        <form action="{{ route('link-insertions.order') }}" method="POST">
            @csrf
            <label for="existing_url">Existing Page URL:</label>
            <input type="url" name="existing_url" required>

            <label for="promoted_url">Promoted URL:</label>
            <input type="url" name="promoted_url" required>

            <button type="submit">Submit Order</button>
        </form>
    </div>
@endsection