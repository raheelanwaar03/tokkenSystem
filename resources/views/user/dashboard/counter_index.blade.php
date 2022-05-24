@extends('user.dashboard.layout')

@section('title')
    Dashboard
@endsection

@section('content')
    <h1>Welcome {{ auth()->user()->name }}</h1>


    @foreach ($counters as $counter)
    <div class="jumbotron">
        <h3>Name:{{ $counter->name }}</h3>
        <p>Counter:{{ $counter->description }}</p>
        <p>Status:{{ $counter->status }}</p>
        <a href="{{ route('user.dashboardCounter.edit',['Counter'=>$counter->id]) }}" class="btn btn-primary">Edit</a>
    </div>

    @endforeach

@endsection
