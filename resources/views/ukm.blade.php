@extends('layouts.app')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <h2>Manajemen UKM</h2>
    <a href="{{ route('ukm.create') }}" class="btn btn-primary mb-3">Tambah UKM</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nama UKM</th>
                <th>Pembina</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ukms as $ukm)
                <tr>
                    <td>{{ $ukm->nama_ukm }}</td>
                    <td>{{ $ukm->pembina }}</td>
                    <td>
                        <a href="{{ route('ukm.edit', $ukm->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('ukm.destroy', $ukm->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        <form action="{{ route('event.daftar', $event->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success">Daftar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Belum ada UKM terdaftar.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
