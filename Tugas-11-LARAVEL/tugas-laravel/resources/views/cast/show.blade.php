@extends('layouts.master')

@section('title', 'Detail Cast')

@section('content')
    <h1>{{ $cast->nama }}</h1>
    <p>Umur: {{ $cast->umur }} tahun</p>
    <p>Bio: {{ $cast->bio }}</p>

    <a href="/cast" class="btn btn-secondary">Kembali</a>
@endsection
