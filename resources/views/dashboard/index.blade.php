@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="container is-fluid">
    <div class="columns">
        <!-- Statistics Section -->
        <div class="column is-12">
            <div class="notification is-light" style="background: linear-gradient(to right, #005757, #008c8c); color: white;">
                <div class="columns">
                    <div class="column has-text-centered">
                        <h2 class="title is-4">Projects</h2>
                        <p class="subtitle is-1">0</p> <!-- Increased font size -->
                    </div>
                    <div class="column has-text-centered">
                        <h2 class="title is-4">Websites</h2>
                        <p class="subtitle is-1">0</p> <!-- Increased font size -->
                    </div>
                    <div class="column has-text-centered">
                        <h2 class="title is-4">Backlinks</h2>
                        <p class="subtitle is-1">0</p> <!-- Increased font size -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- No Projects Yet Section -->
    <div class="columns">
        <div class="column is-12 has-text-centered">
            <div class="notification is-warning">
                <h2 class="title is-4">No Projects Yet</h2>
                <p class="subtitle is-6">It looks like you haven't created any projects. Start by creating one!</p>
                <a href="#" class="button is-primary is-large">Create a Project</a>
            </div>
        </div>
    </div>
</div>
@endsection