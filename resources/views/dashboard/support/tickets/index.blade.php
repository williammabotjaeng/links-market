@extends('layouts.dashboard')

@section('title', 'Tickets')

@section('content')
<div class="container is-fluid">
    <h1 class="title m-4">Support Tickets</h1>

    @if(session('success'))
        <div class="notification is-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table is-striped is-fullwidth">
        <thead>
            <tr>
                <th>Ticket Number</th>
                <th>Subject</th>
                <th>Status</th>
                <th>Priority</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->ticket_number }}</td>
                    <td>{{ $ticket->subject }}</td>
                    <td>{{ ucfirst($ticket->status) }}</td>
                    <td>{{ ucfirst($ticket->priority) }}</td>
                    <td>{{ $ticket->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-small is-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('tickets.create') }}" class="button is-primary">Create New Ticket</a>
</div>
@endsection