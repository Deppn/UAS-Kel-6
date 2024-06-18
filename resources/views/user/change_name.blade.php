@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Ubah Nama</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('user.changeName') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nama Baru:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Ubah Nama</button>
    </form>
</div>
@endsection