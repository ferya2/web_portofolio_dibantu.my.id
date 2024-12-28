<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head') {{-- Include bagian head --}}
</head>
<body>
    @include('partials.navbar') {{-- Include bagian navigasi --}}
    @yield('content') {{-- Tempat untuk konten halaman --}}
    @include('partials.footer')
    @include('partials.loader')
    @include('partials.script')
</body>
</html>
