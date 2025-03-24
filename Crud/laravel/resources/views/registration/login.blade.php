<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="container p-4 bg-white shadow-sm rounded" style="max-width: 400px;">
        <h4 class="text-center mb-3">Login</h4>

        <div class="mb-3">
            <label for="emailInput" class="form-label fw-bold">Email</label>
            <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
        </div>

        <div class="mb-3">
            <label for="passwordInput" class="form-label fw-bold">Password</label>
            <input type="password" class="form-control" id="passwordInput" placeholder="Enter your password">
        </div>

        <a href="{{route('posts.index')}}" class="btn btn-secondary w-100">Submit</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
