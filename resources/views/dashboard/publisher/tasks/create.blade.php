@extends('layouts.dashboard')

@section('title', 'Create Task')

@section('content')
<div class="container is-fluid">
    <h1 class="title">Create a New Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="field">
            <label class="label">Product Type</label>
            <div class="control">
                <input class="input" type="text" name="product_type" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Site URL</label>
            <div class="control">
                <input class="input" type="url" name="site_url" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Promoted URL</label>
            <div class="control">
                <input class="input" type="url" name="promoted_url" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Anchor Text</label>
            <div class="control">
                <input class="input" type="text" name="anchor_text" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Status</label>
            <div class="control">
                <select class="select" name="status" required>
                    <option value="pending">Pending</option>
                    <option value="in_progress">In Progress</option>
                    <option value="completed">Completed</option>
                    <option value="failed">Failed</option>
                </select>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-primary">Create Task</button>
            </div>
        </div>
    </form>
</div>
@endsection