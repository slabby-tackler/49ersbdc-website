<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('layouts.head')
    <body>
        @include('layouts.header')
        @include('layouts.nav')
        <div id="app">
            <div class="container">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>
