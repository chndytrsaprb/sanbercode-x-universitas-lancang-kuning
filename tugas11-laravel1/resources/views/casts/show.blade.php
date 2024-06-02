@extends('layouts.master')

@section('title')
    Detail Casts
@endsection

@section('content')
    <p>{{$casts->nama}}</p>
    <p>{{$casts->umur}}</p>
    <p>{{$casts->bio}}</p>

    <a href="/casts" class="btn btn-sm btn-secondary">Kembali</a>
@endsection
