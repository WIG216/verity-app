@extends('layouts.app')

@section('auth')
    @include('layouts.navbars.auth.nav')
    <div class="main-container" id="container">
        @include('layouts.navbars.auth.sidebar')
        <div id="content" class="main-content">
            @yield('content')
            @include('layouts.footers.auth.footer')
        </div>
    </div>

    
@endsection
