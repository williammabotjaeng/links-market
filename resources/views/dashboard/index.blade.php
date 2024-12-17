@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="container is-fluid">
    <div class="columns">
        <!-- Statistics Section -->
        <div class="column is-12">
            <div class="notification is-light" style="background: linear-gradient(to right, #005757, #008c8c); color: white;">
                <div class="columns">
                    @if($user->current_role === 'advertiser')
                        <div class="column has-text-centered">
                            <h2 class="title is-4">Projects</h2>
                            <p class="subtitle is-1">{{ $projectsCount ?? 0 }}</p> <!-- Display project count -->
                        </div>
                    @elseif($user->current_role === 'publisher')
                        <div class="column has-text-centered">
                            <h2 class="title is-4">Websites</h2>
                            <p class="subtitle is-1">{{ $websitesCount ?? 0 }}</p> <!-- Display website count -->
                        </div>

                        <div class="column has-text-centered">
                            <h2 class="title is-4">Social Media</h2>
                            <p class="subtitle is-1">{{ 0 }}</p> <!-- Display social count -->
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
            @if($user->current_role === 'advertiser' && $projectsCount == 0)
                <div class="notification is-warning">
                    <h2 class="title is-4">No Projects Yet</h2>
                    <p class="subtitle is-6">It looks like you haven't created any projects. Start by creating one!</p>
                    <a href="#" class="button is-primary is-large">Create a Project</a>
                </div>
            @elseif($user->current_role === 'publisher' && $websitesCount == 0)
                <div class="notification is-warning">
                    <h2 class="title is-4">No Websites Yet</h2>
                    <p class="subtitle is-6">It looks like you haven't created any websites. Start by creating one!</p>
                    <a href="#" class="button is-primary is-large">Create a Website</a>
                </div>
                <br>
                <div class="notification is-warning">
                    <h2 class="title is-4">No Social Media Yet</h2>
                    <p class="subtitle is-6">It looks like you haven't added any Social Media. Start by creating one!</p>
                    <a href="#" class="button is-primary is-large">Add Social Media</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection