@extends('layouts.main')
@section('title', 'Registered User')
 
@section('content')
<div class="mt-4 d-flex justify-content-end">
    <a href="/users" class="btn btn-info me-3"> Approve Users List   </a>   
</div>
<div class="mt-4">
    <table class="table">
        <thead>
            <tr>
                <td>No. </td>
                <td>Username</td>
                <td>Phone</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($item as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->phone}}</td>
                <td> 
                    <a href="/user-detail/{{$item->slug}}" class="btn btn-success me-3">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection