<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{--  <link rel="icon" href="{{ asset($favicon) }}">  --}}

    <title>{{ config('app.name') }}</title>
    @include('admin.layouts.components.css')
    @stack('css')
    <style>
        .log-out {
            position: relative;
            left: 2rem;
        }
    </style>
</head>

<body>
 
        @include('admin.layouts.components.header')
        @yield('content')

    
    @include('admin.layouts.components.footer')

    


    @include('admin.layouts.components.script')
    @stack('js')





</body>

</html>
