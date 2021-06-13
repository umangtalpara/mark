@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="container">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>info</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>sub1</td>
                                        <td>{{ $student->sub1 }}</td>
                                    </tr>
                                    <tr>
                                        <td>sub2</td>
                                        <td>Dooley</td>
                                    </tr>
                                    <tr>
                                        <td>sub3</td>
                                        <td>Doe</td>
                                    </tr>
                                    <tr>
                                        <td>sub4</td>
                                        <td>Moe</td>
                                    </tr>
                                    <tr>
                                        <td>total</td>
                                        <td>Dooley</td>
                                    </tr>
                                    <tr>
                                        <td>avg</td>
                                        <td>Moe</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>

                    //new
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
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    //new
                @endsection
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
