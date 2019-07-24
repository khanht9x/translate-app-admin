<!DOCTYPE html>
<html>
<head>
    @include('Base::layouts.components.head')
</head>
<div id="main-wrapper" class="homepage">
    @include('Base::layouts.components.header')
    @yield('content')
</div>
@include('Base::layouts.components.footer')
@include('Base::layouts.components.script')
</body>
<script>
</script>
</html>
