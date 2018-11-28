@extends('layout.master')

@section('contant')
    <h3>Create New Post</h3>
    <hr>
    @include('partials.errors')
    <form action="{{ route('admin.create') }}" method="post">
        <div class="from-group">
            <label for="title">Post Title</label>
            <input class="form-control" type="text" id="title" name="title">
        </div>
        <div class="from-group">
            <label for="contant">Contant</label>
            <input class="form-control" type="text" id="contant" name="contant">
        </div>
        {{ csrf_field() }}
        <div class="from-group">
            <br>
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </form>
@endsection