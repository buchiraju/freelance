<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body id="app-layout">

    @include('includes.header')
	
    @yield('content')
	
	<footer class="footer">
            @include('includes.footer')
           
</body>
</html>
