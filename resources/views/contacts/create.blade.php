@extends('layout')

@section('content')
<h2>Add Contact</h2>
<form method="POST" action="{{ route('contacts.store') }}">
    @csrf
    <input name="name" placeholder="Name" required>
    <input name="email" placeholder="Email" required>
    <input name="phone" placeholder="Phone">
    <input name="company" placeholder="Company">
    <textarea name="notes" placeholder="Notes"></textarea>
    <button type="submit">Save</button>
</form>
@endsection
