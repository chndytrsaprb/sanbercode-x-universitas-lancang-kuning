@extends('layouts.master')

@section('title')
    Casts
@endsection

@section('content')
<a href="/casts/create" class="btn btn-sm btn-primary">Add Casts</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($casts as $key=>$item)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$item->nama}}</td>
            <td>
                <form action="/casts/{{$item->id}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/casts/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
                    <a href="/casts/{{$item->id}}/edit" class="btn btn-sm btn-warning">Update</a>
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <th>Tidak ada casts</th>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
