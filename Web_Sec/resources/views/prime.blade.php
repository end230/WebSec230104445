
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center mb-0">Prime Numbers Calculator</h2>
                    </div>
                    <div class="card-body">
                        <!-- Prime Number Checker -->
                        <div class="mb-5">
                            <h4 class="text-center mb-3">Check if a Number is Prime</h4>
                            <form method="GET" class="mb-4">
                                <div class="row g-3 align-items-center justify-content-center">
                                    <div class="col-auto">
                                        <label for="number" class="col-form-label">Enter a number:</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="number" id="number" name="number" class="form-control" 
                                               value="{{ request('number', '') }}" min="1">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Check Number</button>
                                    </div>
                                </div>
                            </form>

                            @php
                                $number = request('number');
                                if ($number) {
                                    $isPrime = true;
                                    if ($number == 1) {
                                        $isPrime = false;
                                    }
                                    for ($i = 2; $i <= sqrt($number); $i++) {
                                        if ($number % $i == 0) {
                                            $isPrime = false;
                                            break;
                                        }
                                    }
                                }
                            @endphp

                            @if(isset($number))
                                <div class="alert {{ $isPrime ? 'alert-success' : 'alert-info' }} text-center">
                                    <strong>{{ $number }}</strong> is {{ $isPrime ? 'a prime number!' : 'not a prime number.' }}
                                    @if(!$isPrime && $number > 1)
                                        <br>
                                        Factors: 
                                        @php
                                            $factors = [];
                                            for ($i = 1; $i <= $number; $i++) {
                                                if ($number % $i == 0) {
                                                    $factors[] = $i;
                                                }
                                            }
                                            echo implode(', ', $factors);
                                        @endphp
                                    @endif
                                </div>
                            @endif
                        </div>

                        <!-- Prime Numbers Table -->
                        <div>
                            <h4 class="text-center mb-3">First 100 Prime Numbers</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        @php
                                            function isPrime($num) {
                                                if ($num < 2) return false;
                                                for ($i = 2; $i <= sqrt($num); $i++) {
                                                    if ($num % $i == 0) return false;
                                                }
                                                return true;
                                            }

                                            $primes = [];
                                            $num = 2;
                                            while (count($primes) < 100) {
                                                if (isPrime($num)) {
                                                    $primes[] = $num;
                                                }
                                                $num++;
                                            }
                                        @endphp

                                        @foreach(array_chunk($primes, 10) as $row)
                                            <tr>
                                                @foreach($row as $prime)
                                                    <td class="text-center {{ request('number') == $prime ? 'table-primary' : '' }}">
                                                        {{ $prime }}
                                                    </td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Prime Number Properties -->
                        <div class="mt-4">
                            <h4 class="text-center mb-3">Properties of Prime Numbers</h4>
                            <div class="alert alert-light">
                                <ul class="mb-0">
                                    <li>A prime number is a natural number greater than 1 that has no positive divisors other than 1 and itself.</li>
                                    <li>The first few prime numbers are: 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, ...</li>
                                    <li>2 is the only even prime number.</li>
                                    <li>Every number greater than 1 is either prime or can be written as a product of prime numbers.</li>
                                </ul>
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