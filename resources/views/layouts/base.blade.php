<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon |  @yield('title')</title>
    @routes()
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/datatables.css')}}">
    @stack('styles')
</head>

<body>
    <section id="main">
        @yield('content')
    </section>

</body>
<script src="{{asset('js/components/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('js/components//bootstrap.min.js')}}"></script>
<script src="{{asset('js/components/sweetalert2.all.js')}}"></script>
<script src="{{asset('js/components/datatables.js')}}"></script>
@stack('scripts')
</html>
