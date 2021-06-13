@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="container">
                    </div>


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
