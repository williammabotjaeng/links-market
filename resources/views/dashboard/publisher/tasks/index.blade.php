@extends('layouts.dashboard')

@section('title', 'Tasks')

@section('content')
<div class="container is-fluid">

    <h1 class="title m-4">Tasks</h1>

    <!-- Tabs for Task Statuses -->
    <div class="tabs">
        <ul>
            <li class="is-active"><a href="#all-tasks" data-tab="all-tasks">All Tasks</a></li>
            <li><a href="#pending" data-tab="pending">Pending</a></li>
            <li><a href="#in-progress" data-tab="in-progress">In Progress</a></li>
            <li><a href="#completed" data-tab="completed">Completed</a></li>
            <li><a href="#failed" data-tab="failed">Failed</a></li>
        </ul>
    </div>

    <!-- Task Content -->
    <div class="tab-content">
        <div id="all-tasks" class="tab is-active">
            <div class="notification is-warning">
                <h2 class="title is-4">No Tasks Yet</h2>
                <p class="subtitle is-6">It looks like you haven't created any tasks. Please check back later!</p>
            </div>
        </div>

        <div id="pending" class="tab" style="display: none;">
            <div class="notification is-warning">
                <h2 class="title is-4">No Pending Tasks</h2>
                <p class="subtitle is-6">There are currently no tasks pending.</p>
            </div>
        </div>

        <div id="in-progress" class="tab" style="display: none;">
            <div class="notification is-warning">
                <h2 class="title is-4">No In Progress Tasks</h2>
                <p class="subtitle is-6">There are currently no tasks in progress.</p>
            </div>
        </div>

        <div id="completed" class="tab" style="display: none;">
            <div class="notification is-warning">
                <h2 class="title is-4">No Completed Tasks</h2>
                <p class="subtitle is-6">There are currently no completed tasks.</p>
            </div>
        </div>

        <div id="failed" class="tab" style="display: none;">
            <div class="notification is-warning">
                <h2 class="title is-4">No Failed Tasks</h2>
                <p class="subtitle is-6">There are currently no failed tasks.</p>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    // Tab functionality
    document.querySelectorAll('.tabs a').forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelectorAll('.tab').forEach(content => {
                content.style.display = 'none'; // Hide all tabs
            });
            document.querySelector(`#${this.dataset.tab}`).style.display = 'block'; // Show the active tab

            document.querySelectorAll('.tabs li').forEach(li => {
                li.classList.remove('is-active');
            });
            this.parentElement.classList.add('is-active');
        });
    });
</script>
@endsection
@endsection