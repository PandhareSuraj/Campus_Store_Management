<!DOCTYPE html>
<html>
<head>
    <title>Campus Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Campus Store</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger btn-sm">Logout</button>
        </form>
    </div>
</nav>

@yield('content')

</body>
</html>