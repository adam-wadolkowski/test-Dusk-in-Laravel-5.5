@extends('layouts.master')

@section('content')

<div class="row"><!-- align-items-center"> -->
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Users data</h2>
        </div>
        <div class="pull-right align-self-center">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Add New User</a>
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
            <th>Name</th>
            <th>Email</th>
            <th>Created</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            @if($user->created_at)
                <td>{{$user->created_at}}</td>
            @else
                <td> - </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

{{ $users->links('pagination::bootstrap-4') }}

@endsection
