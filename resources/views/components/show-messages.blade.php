@foreach (['danger' => 'fa fa-exclamation-triangle',
        'warning' => 'fa fa-exclamation-circle',
        'success' => 'fa fa-check-circle',
        'info' => 'fa-info-circle']
        as $key => $icon)

    @if(Session::has($key))
        <div class="alert alert-{{ $key }}">
        	<i class="{{ $icon }}"></i> {!! Session::get($key) !!}
        </div>
    @endif
@endforeach
