@extends('layouts.master')

@section('title', 'Tambah Cast')

@section('content')
    <form action="/cast" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama">
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control" name="umur" id="umur">
            @error('umur')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea class="form-control" name="bio" id="bio" rows="3"></textarea>
            @error('bio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
