@extends('layout')

@section('content')
<div class="container">

    <h2 class="mb-4">Contacts</h2>

    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-light bg-light mb-4 rounded">
        <div class="container-fluid">

            <form class="d-flex" method="GET" action="{{ route('contacts.index') }}">
                <input 
                    class="form-control me-2" 
                    type="search" 
                    name="search" 
                    value="{{ $search }}" 
                    placeholder="Search by name/email" 
                    aria-label="Search">

                <button class="btn btn-outline-success me-2" type="submit">Search</button>
            </form>

            <a href="{{ route('contacts.create') }}" class="btn btn-primary">Add New</a>
        </div>
    </nav>

    @foreach($contacts as $contact)
        <div class="card mb-3">
            <div class="card-body">
                <strong>{{ $contact->name }}</strong> | {{ $contact->email }} <br>
                📞 {{ $contact->phone }} | 🏢 {{ $contact->company }} <br>
                ✏️ {{ $contact->notes }}
                <br>
                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-warning">Edit</a>

                <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
