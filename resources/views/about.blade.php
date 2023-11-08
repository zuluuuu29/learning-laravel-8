@extends('layouts.main')

@section('container')
    <h1>About</h1>
    <h3>{{ $name }}</h3>
    <h3>{{ $email }}</h3>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumnbnail rounded-circle">
@endsection

