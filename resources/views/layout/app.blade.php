<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   {{-- <- bootstrap css --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
    {{-- <title>@yield('title','Laravel 5.8 Basics')</title> --}}
</head>
<body>
    {{-- That's how you write a comment in blade --}}
    
    @include('navbar')
    
    <main class="container" style="text-align:center">
        @yield('content')
    </main>
    @include('footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{-- <script src="{{asset('js/app.js')}}"></script>  --}}
    
</body>
</html>