@extends('layout.master')

@section('contant')
    <h1>This is admin</h1>
    <hr>
    <a href="{{ route('admin.create') }}">Create Post</a>
    <hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora corporis nihil tenetur praesentium quidem quo voluptas pariatur, rerum voluptatum quae illo autem dicta, atque sapiente recusandae fuga provident, animi error!</p>
    <a href="{{ route('admin.edit', ['id'=> 1]) }}">Edit</a>
@endsection