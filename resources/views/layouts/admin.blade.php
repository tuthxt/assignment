<!-- resources/views/layouts/admin.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin - @yield('title')</title>
    @livewireStyles
</head>
<body>
    @include('client.partials.sidebar')
    @yield('content')
    @livewireScripts
</body>
</html>
