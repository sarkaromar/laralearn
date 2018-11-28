@extends('layout.master')

@section('contant')
<h1>{{ $post['title'] }}</h1>
<p>{{ $post['contant'] }}</p>
@endsection