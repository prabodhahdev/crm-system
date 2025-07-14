@extends('layout')

@section('content')
<h2>Edit Contact</h2>
<form method="POST" action="{{ route('contacts.update', $contact->id) }}">
    @csrf @method('PUT')
    <input name="name" value="{{ $contact->name }}" required>
    <input name="email" value="{{ $contact->email }}" required>
    <input name="phone" value="{{ $contact->phone }}">
    <input name="company" value="{{ $contact->company }}">
    <textarea name="notes">{{ $contact->notes }}</textarea>
    <button type="submit">Update</button>
</form>
@endsection
