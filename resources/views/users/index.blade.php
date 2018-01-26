@extends('layouts.master')

@section('content')

<h2>Users data</h2>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users_data as $user)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="pull-right">
    <a class="btn btn-success" href="{{ route('users.add') }}"> Add New User</a>
</div>

@endsection