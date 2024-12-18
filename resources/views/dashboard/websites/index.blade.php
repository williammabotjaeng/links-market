@extends('layouts.dashboard')

@section('title', 'My Websites')

@section('content')
<div class="container is-fluid">
    <br>
    <div class="is-flex is-justify-content-space-between mb-2">
        <h1 class="title">My Websites</h1>
        @if($websites->isEmpty())

        @else
        <a href="{{ route('websites.createStepOne') }}" class="button is-primary">Create a Website</a>
        @endif
    </div>

    @if($websites->isEmpty())
        <div class="notification is-warning">
            <h2 class="title is-4">No Websites Yet</h2>
            <p class="subtitle is-6">It looks like you haven't created any websites yet. Start by creating one!</p>
            <a href="{{ route('websites.createStepOne') }}" class="button is-primary is-large">Create a Website</a>
        </div>
    @else
        <table class="table is-striped is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>URL</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Traffic</th>
                    <th>Ad Space Available</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($websites as $website)
                <tr>
                    <td>{{ $website->name }}</td>
                    <td>{{ $website->url }}</td>
                    <td>{{ $website->description }}</td>
                    <td>{{ $website->category }}</td>
                    <td>{{ $website->traffic }}</td>
                    <td>{{ $website->ad_space_available }}</td>
                    <td class="is-align-content-center is-justify-content-center">
                        <a href="{{ route('websites.stepOneEdit', $website->id) }}" class="button is-primary is-small m-2">Edit</a>
                        <br>
                        <form action="{{ route('websites.destroy', $website->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger is-small">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection