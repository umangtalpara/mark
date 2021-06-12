<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <title>add-mark</title>
</head>

<body>

    <h4><a style="float: right " href="{{ route('mark.create') }}">Add new mark</a></h4>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">student_id</th>
                <th scope="col">sub1</th>
                <th scope="col">sub2</th>
                <th scope="col">sub3</th>
                <th scope="col">sub4</th>
                <th scope="col">total</th>
                <th scope="col">avg</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
                {{-- <th scope="col">add-mark</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($marks as $mark)


                <tr>
                    <td>{{ $mark->student_id }}</td>
                    <td>{{ $mark->sub1 }}</td>
                    <td>{{ $mark->sub2 }}</td>
                    <td>{{ $mark->sub3 }}</td>
                    <td>{{ $mark->sub4 }}</td>
                    <td>{{ $mark->total }}</td>
                    <td>{{ $mark->avg }}</td>

                    <td><a href="{{ route('mark.edit', $mark->id) }}" class="btn btn-info"> edit </a></td>

                    {{-- <td><a href="{{ route('mark.edit', $mark->id) }}" class="btn btn-info"> edit </a></td> --}}
                    <td>
                        <form action="{{ route('mark.destroy', $mark->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete </button>
                        </form>
                    </td>
                    {{-- <td><a href="#" class="btn btn-danger"> delete </a></td> --}}
                    {{-- <td><a href="#">  add mark  </a></td> --}}

                    </form>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

<style></style>
