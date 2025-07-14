@extends('layout')

@section('content')
<div class="container mt-5 col-md-6">
    <h2>Edit Contact</h2>

    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input name="name" id="name" class="form-control" value="{{ $contact->name }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input name="email" id="email" type="email" class="form-control" value="{{ $contact->email }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="phone">Phone</label>
            <input name="phone" id="phone" class="form-control" value="{{ $contact->phone }}">
        </div>

        <div class="form-group mb-3">
            <label for="company">Company</label>
            <input name="company" id="company" class="form-control" value="{{ $contact->company }}">
        </div>

        <div class="form-group mb-3">
            <label for="notes">Notes</label>
            <textarea name="notes" id="notes" class="form-control" rows="4">{{ $contact->notes }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
