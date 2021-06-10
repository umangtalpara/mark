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

    <title>add-student</title>
</head>

<body>

    <h4><a style="float: right " href={{ route('student.create') }}>Add new student</a></h4>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">e_no</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">mobile</th>
                <th scope="col">dob</th>
                <th scope="col">address</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
                <th scope="col">add-mark</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th>{{ $student->e_no }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->password }}</td>
                    <td>{{ $student->mobile }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>{{ $student->address }}</td>
                    <td><a href="{{ route('student.edit', $student->id) }}" class="btn btn-info"> edit </a></td>
                    <td>
                        <form action="{{ route('student.destroy', $student->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete </button>
                        </form>
                    </td>
                    <td><a href="{{ route('mark.create') }}"> add mark </a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

<style></style>
