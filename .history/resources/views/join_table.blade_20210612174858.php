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

                                <tr>
                                    <td>student_id</td>
                                    <td>{{ $mark->student_id }}</td>
                                <tr>
                                    <td>sub1</td>
                                    <td>{{ $mark->student_id }}</td>
                                </tr>
                                <tr>
                                    <td>sub2</td>
                                    <td>v{{ $mark->student_id }}</td>
                                </tr>
                                <tr>
                                    <td>sub3</td>
                                    <td>{{ $mark->student_id }}< /td>
                                </tr>
                                <tr>
                                    <td>sub4</td>
                                    <td>{{ $mark->student_id }}</td>
                                </tr>
                                <tr>
                                    <td>total</td>
                                    <td>{{ $mark->student_id }}</td>
                                </tr>
                                <tr>
                                    <td>avg</td>
                                    <td>{{ $mark->student_id }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
