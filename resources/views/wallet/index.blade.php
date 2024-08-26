{{-- @extends('layouts.app') --}}

{{-- @section('title', 'Your Wallet') --}}

{{-- @section('content') --}}


@extends('frontend.layouts.main')

@section('title', 'Home Page')

@section('frontend.content')

<div class="container" style="margin-top: 150px;
    margin-bottom: 150px;">
    <h1>Your Wallet</h1>

    @if($wallet)
        <p>Current Balance: ₹{{ number_format($wallet->balance, 2) }}</p>
    @else
        <p>You do not have a wallet yet.</p>
    @endif
{{-- 
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif --}}

    {{-- @if($wallet) --}}
        <!-- Add Funds Form -->
        <h2>Add Funds</h2>
        <form action="{{ route('wallet.addFunds') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="amount">Amount to Add:</label>
                <input type="number" name="amount" id="amount" class="form-control" min="0.01" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Funds</button>
        </form>

        <!-- Withdraw Funds Form -->
        <h2>Withdraw Funds</h2>
        <form action="{{ route('wallet.withdrawFunds') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="withdraw_amount">Amount to Withdraw:</label>
                <input type="number" name="amount" id="withdraw_amount" class="form-control" min="0.01" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-warning">Withdraw Funds</button>
        </form>
    {{-- @endif --}}
</div>

{{-- <x-alert type="success">
    Your operation was successful!
</x-alert> --}}

{{-- @endsection --}}

@endsection
