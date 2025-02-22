
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Tables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center mb-0">Multiplication Tables</h2>
                    </div>
                    <div class="card-body">
                        <form method="GET" class="mb-4">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="number" class="col-form-label">Enter a number:</label>
                                </div>
                                <div class="col-auto">
                                    <input type="number" id="number" name="number" class="form-control" 
                                           value="{{ request('number', 1) }}" min="1" max="20">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">Generate Table</button>
                                </div>
                            </div>
                        </form>

                        @php
                            $number = request('number', 1);
                        @endphp

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-center">Multiplication Table for {{ $number }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <tr>
                                            <td class="text-center">
                                                {{ $number }} × {{ $i }} = {{ $number * $i }}
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-center mb-3">Complete Multiplication Grid (1-10)</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-center">×</th>
                                            @for ($i = 1; $i <= 10; $i++)
                                                <th class="text-center">{{ $i }}</th>
                                            @endfor
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 1; $i <= 10; $i++)
                                            <tr>
                                                <th class="table-dark text-center">{{ $i }}</th>
                                                @for ($j = 1; $j <= 10; $j++)
                                                    <td class="text-center {{ $i == request('number') || $j == request('number') ? 'table-primary' : '' }}">
                                                        {{ $i * $j }}
                                                    </td>
                                                @endfor
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>