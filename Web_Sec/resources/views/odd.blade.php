
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even and Odd Numbers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-header {
            background: linear-gradient(45deg, #FF6B6B, #4ECDC4);
        }
        .even-number {
            background-color: #4ECDC4;
            color: white;
            font-size: 1.2em;
            padding: 10px 15px;
            border-radius: 8px;
            margin: 5px;
            display: inline-block;
            transition: transform 0.3s;
        }
        .odd-number {
            background-color: #FF6B6B;
            color: white;
            font-size: 1.2em;
            padding: 10px 15px;
            border-radius: 8px;
            margin: 5px;
            display: inline-block;
            transition: transform 0.3s;
        }
        .matched-number {
            transform: scale(1.2);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            font-weight: bold;
        }
        .even-card {
            border: 2px solid #4ECDC4;
        }
        .odd-card {
            border: 2px solid #FF6B6B;
        }
        .even-header {
            background-color: #4ECDC4;
        }
        .odd-header {
            background-color: #FF6B6B;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header">
                <h2 class="text-center text-white mb-0">Even and Odd Numbers</h2>
            </div>
            <div class="card-body">
                <!-- Number Checker -->
                <form method="GET" class="mb-4">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="number" name="number" class="form-control form-control-lg" 
                                       placeholder="Enter a number" value="{{ request('number') }}">
                                <button class="btn btn-lg" style="background-color: #95A5A6; color: white;" 
                                        type="submit">Check</button>
                            </div>
                        </div>
                    </div>
                </form>

                @php
                    $number = request('number');
                    if ($number !== null) {
                        $isEven = $number % 2 == 0;
                    }
                @endphp

                @if(isset($number))
                    <div class="text-center mb-4">
                        <div class="alert" style="background-color: {{ $isEven ? '#4ECDC4' : '#FF6B6B' }}">
                            <h4 class="text-white mb-0">
                                {{ $number }} is {{ $isEven ? 'Even' : 'Odd' }}!
                            </h4>
                        </div>
                    </div>
                @endif

                <!-- Number Lists -->
                <div class="row mt-4">
                    <!-- Even Numbers -->
                    <div class="col-md-6 mb-4">
                        <div class="card even-card">
                            <div class="card-header even-header">
                                <h3 class="text-center text-white mb-0">Even Numbers (1-20)</h3>
                            </div>
                            <div class="card-body text-center">
                                @for($i = 2; $i <= 20; $i += 2)
                                    <span class="even-number {{ $i == $number ? 'matched-number' : '' }}">
                                        {{ $i }}
                                    </span>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <!-- Odd Numbers -->
                    <div class="col-md-6 mb-4">
                        <div class="card odd-card">
                            <div class="card-header odd-header">
                                <h3 class="text-center text-white mb-0">Odd Numbers (1-20)</h3>
                            </div>
                            <div class="card-body text-center">
                                @for($i = 1; $i <= 20; $i += 2)
                                    <span class="odd-number {{ $i == $number ? 'matched-number' : '' }}">
                                        {{ $i }}
                                    </span>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

