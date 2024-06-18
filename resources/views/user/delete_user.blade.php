@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Profil Pengguna</h2>
    <!-- Konten profil lainnya -->

    <!-- Form untuk menghapus pengguna -->
    <form method="POST" action="{{ route('user.delete') }}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus akun ini? Pilihan ini tidak dapat dibatalkan.');">
        @csrf
        <button type="submit" class="btn btn-danger">Hapus Akun</button>
    </form>
</div>
@endsection