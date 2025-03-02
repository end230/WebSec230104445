<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./even">Even Numbers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./prime">Prime Numbers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./multable">Multiplication Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./MiniTest">Supermarket Bill</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./transcript">Student Transcript</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./products">products</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">Users List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.create') }}">Add User</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>