<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin LTE 
            @isset($title)
                - {{ $title }}
            @endisset()  
        </title>
        <meta name="description" content="Curo Teknika Inc. Systems" />
        <meta name="keywords" content="Curo,Teknika,Inc,Systems" />
        <meta name="author" content="AppDev" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{{ asset('img/favicon.ico') }}}">
        
        {{-- <link href="{{ URL::asset('../css/font-face.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('../css/fonts.css') }}" rel="stylesheet">
        
        <link href="{{ URL::asset('/css/loading.css') }}" rel="stylesheet"> --}}
       @yield('css')
    </head>
    <body class="@yield('body-class')">               
            
        <div class="mCustomScrollbar" id="main" style="height: 100vh; width: 100vw"  >
        {{-- <div data-simplebar style="height: 100vh;"> --}}
            @yield('content') 
            @yield('js') 
        </div>
             
    </body>
</html>