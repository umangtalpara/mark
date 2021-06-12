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
                                        <td>student_id</td>
                                        <td>{{ $student->student_id }}</td>
                                    <tr>
                                        <td>sub1</td>
                                        <td>$student->sub1</td>
                                    </tr>
                                    <tr>
                                        <td>sub2</td>
                                        <td>value="<?= $student->sub2 ?>"</td>
                                            <tr>
                                                <td>sub3</td>
                                                <td>value="<?= $student->sub3 ?>"</td>
                                            </tr>
                                            <tr>
                                                <td>sub4</td>
                                                <td>value="<?= $student->sub4 ?>"</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>total</td>
                                                                                                    <td>value="<?= $student->total ?>"</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>avg</td>
                                                                                                    <td>value="<?= $student->avg ?>"</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                    
                                                                                    <div class="card-body">
                                                                                        
                                                                                        {{ __('You are logged in!') }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endsection
                                                                
                                                            </tr>
                                                
