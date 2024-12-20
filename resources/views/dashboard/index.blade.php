@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="container is-fluid">
    <div class="columns">
        <!-- Statistics Section -->
        <div class="column is-12">
            <div class="notification is-light" style="background: linear-gradient(to right, #005757, #008c8c); color: white;">
                <div class="columns">
                    @if($user->current_role === 'brand')
                        <div class="column has-text-centered">
                            <h2 class="title is-4">Projects</h2>
                            <p class="subtitle is-1">{{ $projectsCount ?? 0 }}</p> <!-- Display project count -->
                        </div>
                    @elseif($user->current_role === 'creator')
                        <div class="column has-text-centered">
                            <h2 class="title is-4">Websites</h2>
                            <p class="subtitle is-1">{{ $websitesCount ?? 0 }}</p> <!-- Display website count -->
                        </div>

                    @endif
                    <div class="column has-text-centered">
                        <h2 class="title is-4">Backlinks</h2>
                        <p class="subtitle is-1">{{ $backlinksCount ?? 0 }}</p> <!-- Display backlinks count -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- No Projects or Websites Yet Section -->
    <div class="columns">
        <div class="column is-12 has-text-centered">
            @if($user->current_role === 'brand' && $projectsCount == 0)
                <div class="notification is-warning">
                    <h2 class="title is-4">No Projects Yet</h2>
                    <p class="subtitle is-6">It looks like you haven't created any projects. Start by creating one!</p>
                    <a href="{{ route('projects.create') }}" class="button is-primary is-large">Create a Project</a>
                </div>
            @elseif($user->current_role === 'creator' && $websitesCount == 0)
                <div class="notification is-warning">
                    <h2 class="title is-4">No Websites Yet</h2>
                    <p class="subtitle is-6">It looks like you haven't created any websites. Start by creating one!</p>
                    <a href="{{ route('websites.createStepOne') }}" class="button is-primary is-large">Create a Website</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection