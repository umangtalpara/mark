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

    <title>add-teacher</title>
</head>

<body>

    <h4><a style="float: right " href={{ route('teacher.create') }}>Add new teacher</a></h4>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">f_no</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">mobile</th>
                <th scope="col">dob</th>
                <th scope="col">address</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <th>{{ $teacher->f_no }}</th>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->password }}</td>
                    <td>{{ $teacher->mobile }}</td>
                    <td>{{ $teacher->dob }}</td>
                    <td>{{ $teacher->address }}</td>
                    <td><a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-info"> edit </a></td>
                    <td>
                        <form action="{{ route('teacher.destroy', $teacher->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete </button>
                        </form>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
</body>

<style></style>
