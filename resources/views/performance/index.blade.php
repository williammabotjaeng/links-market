@extends('layouts.app')

@section('title', 'Performance Analytics')

@section('content')
    <div class="performance">
        <h1>Your Website Performance</h1>
        <p>Impressions: {{ $impressions }}</p>
        <p>Views: {{ $views }}</p>
        <p>Orders: {{ $orders }}</p>
        <p>Sales Percentage: {{ $salesPercentage }}%</p>
        <div class="rankings">
            <h2>Website Rankings</h2>
            <p>Status: <span class="{{ $rankChange > 0 ? 'rank-up' : 'rank-down' }}">
                {{ $rankChange > 0 ? '+' : '-' }}{{ abs($rankChange) }}
            </span></p>
        </div>
    </div>
@endsection