@extends('layout')

@section('content')
<div class="container mt-5 col-md-6">
    <h2>Add Contact</h2>

    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf

        <div class="form-group mb-3 ">
            <label for="name">Full Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter full name" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
        </div>

        <div class="form-group mb-3">
            <label for="phone">Phone</label>
            <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter phone number">
        </div>

        <div class="form-group mb-3">
            <label for="company">Company</label>
            <input name="company" type="text" class="form-control" id="company" placeholder="Enter company name">
        </div>

        <div class="form-group mb-3">
            <label for="notes">Notes</label>
            <textarea name="notes" class="form-control" id="notes" rows="3" placeholder="Add any notes..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
