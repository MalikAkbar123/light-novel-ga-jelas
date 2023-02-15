@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<h3>Welcome, {{Auth::user()->username}}!</h3>
<!-- Cards -->
<div class="row mt-4">
    <div class="col-4 books card-data">
        <div class="row">
            <div class="col-6">
            <i class="bi bi-book"></i>
            </div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                <div class="desc">
                    Books
                </div>
                <div class="count">
                      {{$book_count}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 ">
        <div class="card-data category">
        <div class="row">
            <div class="col-6">
            <i class="bi bi-bookmarks"></i>
            </div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                <div class="desc">
                    Category
                </div>
                <div class="count">
                      {{$category}}
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="col-4 ">
        <div class="card-data user">
        <div class="row">
            <div class="col-6">
                <i class="bi bi-person"></i>
            </div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                <div class="desc">
                    User
                </div>
                <div class="count">
                      {{$user}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- EndCards -->

{{-- Table rent logs --}}
<div class="mt-4">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Book Title</th>
                <th>Rent Date</th>
                <th>Return Date</th>
                <th>Actual Return Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="7"
                class="text-center">No Data</td>
            </tr>
        </tbody>
    </table>
</div>

{{-- end table --}}
@endsection