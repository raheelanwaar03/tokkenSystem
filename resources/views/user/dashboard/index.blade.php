@extends('user.dashboard.layout')

@section('title')
    Dashboard
@endsection

@section('content')
    <h1>Welcome {{ auth()->user()->name }}</h1>


    @foreach ($departments as $department)
    <div class="jumbotron">
        <h3>{{ $department->name }}</h3>
        <p>{{ $department->description }}</p>
    </div>

    @endforeach

@endsection
