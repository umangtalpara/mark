<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Join Table in Laravel 8 using Eloquent Model</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br />
        <br />
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>e_no</th>
                        <th>sub1</th>
                        <th>sub2</th>
                        <th>sub3</th>
                        <th>sub4</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->e_no }}</td>
                            <td>{{ $row->sub1 }}</td>
                            <td>{{ $row->sub2 }}</td>
                            <td>{{ $row->sub3 }}</td>
                            <td>{{ $row->sub4 }}</td>
                        </tr>
                    @endforeach
                </tbody> --}}
            </table>
        </div>
    </div>
</body>

</html>
