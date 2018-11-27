@extends('layout.master')

@section('contant')
    <h1>Create Page</h1>
    <hr>
    <form action="{{ route('admin.create') }}" method="post">
        <input type="text">
        <button type="submit">POST</button>
    </form>
@endsection