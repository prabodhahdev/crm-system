@extends('layout')

@section('content')
<div class="container">
    <h2>Contacts</h2>

    <form method="GET" action="{{ route('contacts.index') }}">
        <input type="text" name="search" value="{{ $search }}" placeholder="Search by name/email">
        <button type="submit">Search</button>
        <a href="{{ route('contacts.create') }}">Add New</a>
    </form>

    @foreach($contacts as $contact)
        <div style="border: 1px solid #ccc; margin: 10px; padding: 10px;">
            <strong>{{ $contact->name }}</strong> | {{ $contact->email }} <br>
            📞 {{ $contact->phone }} | 🏢 {{ $contact->company }} <br>
            ✏️ {{ $contact->notes }}
            <br>
            <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
            <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit" onclick="return confirm('Delete?')">Delete</button>
            </form>
        </div>
    @endforeach
</div>
@endsection
