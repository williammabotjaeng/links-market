@extends('layouts.account')

@section('content')
<div class="container my-5">
    <div class="columns is-multiline">
        <div class="column is-half">
            <div class="card has-text-white" style="background-color: #008c8c">
                <div class="card-content">
                    <h5 class="title is-5">Main balance</h5>
                    <p class="subtitle is-6">$0</p>
                    <p class="mb-1">The funds you have earned for completed tasks represent the financial rewards accrued from successfully executing projects or assignments. This balance reflects the value of your efforts and contributions, serving as a tangible acknowledgment of your hard work and dedication.</p>
                    <a href="#" class="button is-light">Request Withdrawal</a>
                </div>
            </div>
        </div>
        <div class="column is-half">
            <div class="card has-background-warning has-text-white">
                <div class="card-content">
                    <h5 class="title is-5">Reserved balance</h5>
                    <br>
                    <p class="title is-6 is-size-1 m-12">$0</p>
                    <p class="mb-4">Funds that have been reserved as a task payment</p>
                    <a href="#" class="button is-light">Make Deposit</a>
                </div>
            </div>
        </div>
        <div class="column is-half">
            <div class="card has-background-grey has-text-white">
                <div class="card-content">
                    <h5 class="title is-5">Bonus balance</h5>
                    <p class="subtitle is-6">$0</p>
                    <p class="mb-1">Extra funds that may be added for special activities</p>
                    <a href="#" class="button is-light">Transfer Funds</a>
                </div>
            </div>
            <p class="has-text-centered is-size-5 mt-4 is-grey">You do not have any transactions at this time.</p>
        </div>
        <div class="column is-half">
            <div class="card has-background-success has-text-white">
                <div class="card-content">
                    <h5 class="title is-5">Perform an Action</h5>
                    <p class="mb-1">Do you want to make a withdrawal?</p>
                    <a href="#" class="button is-light">Request Withdrawal</a>
                    <p class="mb-1">Do you want to make a security deposit?</p>
                    <a href="#" class="button is-light">Make Deposit</a>
                    <p class="mb-1">Do you want to transfer funds to your buyer's balance?</p>
                    <a href="#" class="button is-light">Transfer Funds</a>
                </div>
            </div>
        </div>
        <!--<p>This list is empty. You have no transactions yet.</p>-->
        <!-- <div class="column is-full">
            <div class="card has-background-info has-text-white">
                <div class="card-content">
                    <h5 class="title is-5">Transaction History</h5>
                    <p>This list is empty. You have no transactions yet.</p>
                    <!-- <table class="table is-striped is-fullwidth">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Transaction description</th>
                                <th>Transaction amount</th>
                                <th>Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add dynamic transaction data here -->
                        </tbody>
                    </table> -->
                </div>
            </div>
        </div> -->
    </div>
</div>
@endsection