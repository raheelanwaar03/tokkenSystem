@extends('user.dashboard.layout')

@section('title')
    Dashboard
@endsection

@section('content')
    <h1>Welcome {{ auth()->user()->name }}</h1>


    @foreach ($departments as $department)
    <div class="jumbotron">
        <h3>Department:{{ $department->name }}</h3>
        <p>Details:{{ $department->description }}</p>
        <a href="{{ route('user.dashboardDepartment.edit',['Department'=>$department->id]) }}" class="btn btn-primary">Edit</a>
    </div>

    @endforeach

@endsection
