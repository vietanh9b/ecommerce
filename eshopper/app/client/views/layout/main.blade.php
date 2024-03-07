<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>EShopper</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    @include('layout.style')
</head>

<body>
    <!-- Topbar Start -->
    @include('layout.topbar')
    <!-- Topbar End -->
    {{-- home --}}
    @yield('home')
    {{-- end home --}}
    <!-- Footer Start -->
    @include('layout.footer')
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    @include('layout.script')
</body>
</html>