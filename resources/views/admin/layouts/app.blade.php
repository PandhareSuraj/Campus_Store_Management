<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="flex">

    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white min-h-screen p-5">
        <h2 class="text-xl font-bold mb-6">Admin Panel</h2>

        <ul class="space-y-3">
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Users</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="flex-1 p-6">
        @yield('content')
    </div>

</div>

</body>
</html>