@extends('layouts.master')
 
@section('content')

<h2>Add new user</h2>
	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::open(array('route' => 'users.save','method'=>'POST')) !!}

	<div class="form-group">
        <strong>Name:</strong>
        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

	{!! Form::close() !!}

@endsection