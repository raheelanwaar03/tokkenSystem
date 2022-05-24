@extends('user.dashboard.layout')

@section('title')
    Dashboard
@endsection

@section('content')
    <h1>Welcome {{ auth()->user()->name }}</h1>

    <div class="card">
        <div class="card-title">
            <h3 class="text-center text-primary">Update Department</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('user.dashboardDepartment.update',['Department'=>$department->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $department->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $department->description }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>


@endsection
