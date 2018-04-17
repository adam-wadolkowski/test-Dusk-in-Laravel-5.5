<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.head')
</head>
<body>
	<header>
    	@include('layouts.nav')
	</header>
    <div class="container pt-5 pb-5 mt-5 mt-lg-0">
        <main>
        	@yield('content')
        </main>
    
        <footer class="text-white font-small bg-dark pt-4 mt-4">
        	@include('layouts.footer')
        </footer>
    </div>
</body>
</html>
