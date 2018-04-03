<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.nav')
    
	<div class="container pt-5 pb-5 mt-5 mt-lg-0">
        @yield('content')
    </div>

</body>
</html>