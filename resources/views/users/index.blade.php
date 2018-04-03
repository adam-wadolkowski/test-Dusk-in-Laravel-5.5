@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users data</h2>
        </div>
    </div>
</div>

@foreach (['danger' => 'fa fa-exclamation-triangle',
        'warning' => 'fa fa-exclamation-circle',
        'success' => 'fa fa-check-circle',
        'info' => 'fa-info-circle']
        as $key => $icon)

    @if(Session::has($key))
        <div class="alert alert-{{ $key }}"><i class="{{ $icon }}"></i> {!! Session::get($key) !!}</div>
    @endif
@endforeach

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="pull-right">
    <a class="btn btn-success" href="{{ route('users.create') }}"> Add New User</a>
</div>

@endsection
