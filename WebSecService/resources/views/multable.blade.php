<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiblecation table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<body>
    <div class="container">
        <div class="row">
            @for ($j = 1; $j <= 10; $j++)
                <div class="card m-4 col-sm-2">
                    <div class="card-header">multiblecation table {{$j}}</div>
                    <div class="card-body">
                        <table class="table">
                            @for ($i = 1; $i <= 10; $i++)
                                <tr>
                                    <td>{{$i}} * {{$j}}</td>
                                    <td> = {{ $i * $j }}</td>
                                </tr>
                            @endfor
                        </table>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</body>
</html>