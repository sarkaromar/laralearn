@extends('layout.master')

@section('contant')
    <h3>Admin Page</h3>
    <hr>
    @include('partials.success')
    <a class="btn btn-primary" href="{{ route('admin.create') }}">Create New Post</a>
    <hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora corporis nihil tenetur praesentium quidem quo voluptas pariatur, rerum voluptatum quae illo autem dicta, atque sapiente recusandae fuga provident, animi error!</p>
    <a class="btn btn-sm btn-warning" href="{{ route('admin.edit', ['id'=> 1]) }}">Edit</a>
@endsection