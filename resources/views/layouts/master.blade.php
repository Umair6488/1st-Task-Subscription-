<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @yield('cslinks')


</head>
<body>

@yield('header')
@yield('body')
@yield('footer')

@yield('jslinks')
</body>
</html>
