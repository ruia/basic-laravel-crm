@extends('layouts.master')

@section('body')
<body class="sb-nav-fixed">
    @include('partials.navbar')

    <div id="layoutSidenav">
        @include('partials.sidebar')
        
        <div id="layoutSidenav_content">
            @yield('content')

            @include('partials.footer')
        </div>
    </div>
@endsection