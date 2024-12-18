@extends('layouts.dashboard')

@section('title', 'Create Ticket')

@section('content')
<div class="container is-fluid">
    <h1 class="title">Create Support Ticket</h1>

    <form method="POST" action="{{ route('tickets.store') }}">
        @csrf
        <div class="field">
            <label class="label">Subject</label>
            <div class="control">
                <input class="input" type="text" name="subject" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea class="textarea" name="description" required></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">Priority</label>
            <div class="control">
                <div class="select">
                    <select name="priority" required>
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-primary">Create Ticket</button>
            </div>
        </div>
    </form>
</div>
@endsection