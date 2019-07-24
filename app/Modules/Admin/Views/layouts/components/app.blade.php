<!DOCTYPE html>
<html lang="en">
<head>
    @include('Admin::layouts.components.head')
</head>

<body class="skin-default fixed-layout">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <div id="main-wrapper">
        @include('Admin::layouts.components.header')
        @include('Admin::layouts.components.sidebar')
        @yield('content')

        @include('Admin::layouts.components.footer')
    </div>
    @include('Admin::layouts.components.script')
</body>
</html>
