@extends('layouts.master') @section('title', 'Daftar Cast')

@section('content')
    <div class="text-end">
        <a href="/cast/create" class="btn btn-primary mb-3">Tambah Cast Baru</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($casts as $key => $cast)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $cast->nama }}</td>
                    <td>{{ $cast->umur }}</td>
                    <td>
                        <a href="/cast/{{ $cast->id }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/cast/{{ $cast->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/cast/{{ $cast->id }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Data Cast Kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
