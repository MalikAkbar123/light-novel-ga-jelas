@extends('layouts.main')
@section('title', 'Manga')
    
@section('content')
    
<h1>Manga List</h1>

<div class="mt-4 btn  d-flex justify-content-end">
    <a href="/books-add" class="btn btn-dark" >Add Books</a>
</div>

@if (session('status'))
        <div class="alert alert-success mt-3">
        {{ session('status')}}
            </div>   
@endif  

<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Book code</th>
                <th>Title</th>
                <th>cover</th>
                <th>Category</th>
                <th>Status</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach($book as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->book_code}}</td>
                <td>{{$value->title}}</</td>
                <td>
                    @if($value->cover !='')
                    <img src="{{asset('storage/cover/'.$value->cover)}}" alt="" srcset="" width="100px">
                    @else
                    <img src="{{asset('asset/img/found.png')}}" alt="" width="75px">
                    @endif
                </td>                
                <td>
                    @foreach($value->categories as $category)
                    {{$category->name}} <br>
                    @endforeach
                </td>
                <td>{{$value->status}}</</td>
                <td>
                    <a href="/books-edit/{{$value->slug}}" class="btn btn-primary">Edit</a>
                    <a href="/books-delete/{{$value->slug}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

