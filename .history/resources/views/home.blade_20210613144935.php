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
                                    <td>sub1</td>
                                    <td>{{ $student }}</td>
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
@endsection
