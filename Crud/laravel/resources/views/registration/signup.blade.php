<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <form method="POST" action="{{ route('signup') }}" class="container p-4 bg-white shadow-sm rounded" style="max-width: 400px;">
        @csrf
        
        <h4 class="text-center mb-3">Signup</h4>

        <div class="mb-3">
            <label for="nameInput" class="form-label fw-bold">Name</label>
            <input type="text" name="name" class="form-control" id="nameInput" placeholder="Enter your name" required>
        </div>

        <div class="mb-3">
            <label for="emailInput" class="form-label fw-bold">Email</label>
            <input type="email" name="email" class="form-control" id="emailInput" placeholder="Enter your email" required>
        </div>

        <div class="mb-3">
            <label for="passwordInput" class="form-label fw-bold">Password</label>
            <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Enter your password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Submit</button>

        <div class="text-center mt-3">
            <p>Already have an account? <a href="{{ route('register.login') }}">Login</a></p>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
