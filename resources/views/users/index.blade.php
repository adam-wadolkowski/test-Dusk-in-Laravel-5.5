@extends('layouts.master')

@section('title', 'Users')

@section('content')

<div class="row"><!-- align-items-center"> -->
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>@lang('users.index.h2')</h2>
        </div>
        <div class="pull-right align-self-center">
            <a class="btn btn-success" href="{{ route('users.create') }}"> @lang('users.index.btn.create')</a>
        </div>
    </div>
</div>

@component('components.show-messages')
@endcomponent

<table class="table">
    <thead>
        <tr>
            <th>@sortablelink('name',trans('users.index.table.name'))</th>
            <th>@sortablelink('email',trans('users.index.table.email'))</th>
            <th>@sortablelink('created_at',trans('users.index.table.created'))</th>
            <th>@lang('users.index.table.actions')</th>
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
            <td>
            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id]]) !!}
            
            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit','style'=>'padding: 0.46rem;','class' => 'btn btn-danger pull-right delete-button']) !!}
            
            {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $users->links('pagination::bootstrap-4') }}

@endsection
