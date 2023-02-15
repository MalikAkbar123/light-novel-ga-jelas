@extends('layouts.main')

@section('title', 'User Banned')
@section('content')
<h1>List User</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="#" class="btn btn-danger me-3">View Ban User</a>
    <a href="/users-registered" class="btn btn-info me-3"> View New Registared User</a>   
</div>
<div class="mt-4">
    <table class="table">
        <thead>
            <tr>
                <td>No. </td>
                <td>Username</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($usersBanned as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->username}}</td>
                <td>{{$value->phone}}</td>
                <td>{{$value->address}}</td>
                <td>{{$value->action}}</td>
                <td> 
                    <a href="/user-restore/{{$value->slug}}" class="btn btn-success me-3">Restore</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection