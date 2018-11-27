@extends('layout.master')

@section('contant')
    <h1>Edit Page</h1>
    <hr>
    <form action="{{ route('admin.update') }}" method="post">
        <input type="text">
        <button type="submit">Update</button>
    </form>
@endsection