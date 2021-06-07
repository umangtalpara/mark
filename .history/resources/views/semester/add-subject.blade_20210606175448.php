@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <h1>semester--- page</h1>
                    <div class="">
                        <form method="post" action="{{ route('teacher.store') }}">
                            {{-- <form method="post" href="{{route('teacher.add-student')}}> --}}
                            @csrf
                            <div class="container">
                                <h2>add teacher</h2>

                                <div class="card-deck">
                                    <div class="card bg-primary">
                                        <div class="card-body text-center">


                                            <div class="form-group">
                                                <label for="usr">f_no:</label>
                                                <input type="int" class="form-control" name='f_no' placeholder="Enter f_no">
                                            </div>
                                            <div class="form-group">
                                                <label for="usr">Name:</label>
                                                <input type="text" class="form-control" name='name'
                                                    placeholder="Enter Name">
                                            </div>

                                            <div class="form-group">
                                                <label for="usr">Email:</label>
                                                <input type="email" class="form-control" name='email'
                                                    placeholder="Enter email">
                                            </div>

                                            <div class="form-group">
                                                <label for="usr">Password:</label>
                                                <input type="password" class="form-control" name='password'
                                                    placeholder="Enter password">
                                            </div>
                                            <input type="submit" value="Submit"><br><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
