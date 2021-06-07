@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <h1>student--- page</h1>

                    <div class="container">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>

                                </tr>
                                <tr>
                                    <td>Mary</td>
                                    <td>Moe</td>

                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

@endsection


<style>

</style>
