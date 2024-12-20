@extends('layouts.dashboard')

@section('title', 'My Social Accounts')

@section('content')
<div class="container is-fluid">
    <br>
    <div class="is-flex is-justify-content-space-between mb-2">
        <h1 class="title">My Social Accounts</h1>
        @if($socials->isEmpty())
        @else
        <a href="{{ route('socials.create') }}" class="button is-primary">Create a Social Account</a>
        @endif
    </div>

    @if($socials->isEmpty())
        <div class="notification is-warning">
            <h2 class="title is-4">No Social Accounts Yet</h2>
            <p class="subtitle is-6">It looks like you haven't created any social accounts yet. Start by creating one!</p>
            <a href="{{ route('socials.create') }}" class="button is-primary is-large">Create a Social Account</a>
        </div>
    @else
        <table class="table is-striped is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>Platform</th>
                    <th>Account Handle</th>
                    <th>Followers</th>
                    <th>Likes</th>
                    <th>Posts</th>
                    <th>Engagement Rate</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($socials as $social)
                <tr>
                    <td>{{ $social->platform }}</td>
                    <td>{{ $social->account_handle }}</td>
                    <td>{{ $social->followers }}</td>
                    <td>{{ $social->likes }}</td>
                    <td>{{ $social->posts }}</td>
                    <td>{{ $social->engagement_rate }}%</td>
                    <td class="is-align-content-center is-justify-content-center">
                        <a href="{{ route('socials.edit', $social->id) }}" class="button is-primary is-small m-2">Edit</a>
                        <br>
                        <form action="{{ route('socials.destroy', $social->id) }}" method="POST" style="display: inline;">
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