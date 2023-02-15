@extends('layouts.main')
@section('title', 'User Detail')

@section('content')
    <h1>Detail User</h1>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
      </div>
    </div>              
@endif 
    <div class="mt-4 d-flex justify-content-end">
        @if($user->status == 'inactive')
        <a href="/user-approve/{{$user->slug}}" class="btn btn-primary me-3">Approve User</a>
        <a href="/users-registered" class="btn btn-success me-3">Back </a>
        @else
        <a href="user" class="btn btn-success me-3">Back </a>
        @endif
    </div>   


    <div class="mt-4">
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" readonly value="{{$user->username}}">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Phone</label>
        <input type="text" name="form-control" readonly value="{{$user->phone}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Address</label>
        <input type="text" name="form-control" readonly value="{{$user->address}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Status</label>
        <input type="text" name="form-control" readonly value="{{$user->status}}">
    </div>
    
@endsection
