@extends('layouts.master')
 
@section('content')

	<div class="row">
	    <div class="col-lg-12">
	        <div class="pull-left">
	            <h2>@lang('users.create.h2')</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('users.index') }}">
	            @lang('global.btn.back')
	        	</a>
	        </div>
	    </div>
	</div>

	@if ($errors = session('errors'))
		<div class="alert alert-danger">
			@lang('global.messages.error-validate')<br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
        		<strong>@lang('users.create.form.name.name'):</strong>
        		{!! Form::text('name', null, array('placeholder' => Lang::get('users.create.form.name.placeholder'),'class' => 'form-control')) !!}
    		</div>
    	</div>
    	<div class="col-xs-12 col-sm-12 col-md-12">
    		<div class="form-group">
        		<strong>@lang('users.create.form.email.name'):</strong>
        		{!! Form::text('email', null, ['placeholder' => Lang::get('users.create.form.email.placeholder'),'class' => 'form-control']) !!}
    		</div>
    		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-success">@lang('global.btn.submit')</button>
        	</div>
		</div>
	</div>

	{!! Form::close() !!}

@endsection
