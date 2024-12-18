@extends('layouts.dashboard')

@section('title', 'Tasks')

@section('content')
<div class="container is-fluid">

    <h1 class="title m-4">Tasks</h1>

    <!-- Tabs for Task Statuses -->
    <div class="tabs">
        <ul>
            <li class="is-active"><button id="all-tasks-btn" type="button" data-tab="all-tasks" onClick="makeActiveTab('all-tasks')">All Tasks</button></li>
            <li><button id="pending-btn" type="button" data-tab="pending" onClick="makeActiveTab('pending')">Pending</button></li>
            <li><button id="in-progress-btn" type="button" data-tab="in-progress" onClick="makeActiveTab('in-progress')">In Progress</button></li>
            <li><button id="completed-btn" type="button" data-tab="completed" onClick="makeActiveTab('completed')">Completed</button></li>
            <li><button id="failed-btn" type="button" data-tab="failed" onClick="makeActiveTab('failed')">Failed</button></li>
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
    document.addEventListener('DOMContentLoaded', function() {
       
        window.makeActiveTab = function(tabId) {
        
            document.querySelectorAll('.tab').forEach(tab => {
                tab.style.display = 'none'; 
                tab.classList.remove('is-active');
            });

            const activeTab = document.getElementById(tabId);
            if (activeTab) {
                activeTab.style.display = 'block'; 
                activeTab.classList.add('is-active');
            }

            document.querySelectorAll('.tabs li').forEach(li => {
                li.classList.remove('is-active');
            });
            const activeTabButton = Array.from(document.querySelectorAll('.tabs button')).find(button => button.getAttribute('data-tab') === tabId);
            if (activeTabButton) {
                activeTabButton.parentElement.classList.add('is-active');
            }
        };

        makeActiveTab('all-tasks');
    });
</script>
@endsection
@endsection