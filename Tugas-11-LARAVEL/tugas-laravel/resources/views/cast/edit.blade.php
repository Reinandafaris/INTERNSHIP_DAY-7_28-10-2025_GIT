@extends('layouts.master')

@section('title', 'Edit Cast')

@section('content')
    <form action="/cast/{{ $cast->id }}" method="POST">
        @csrf
        @method('PUT') <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $cast->nama }}">
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control" name="umur" id="umur" value="{{ $cast->umur }}">
            @error('umur')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea class="form-control" name="bio" id="bio" rows="3">{{ $cast->bio }}</textarea>
            @error('bio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
@endsection
