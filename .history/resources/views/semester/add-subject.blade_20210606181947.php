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
                                <h2>add subject</h2>

                                <div class="card-deck">
                                    <div class="card bg-primary">
                                        <div class="card-body text-center">


                                            <div class="form-group row">
                                                <label for="is_admin"
                                                    class="col-md-4 col-form-label text-md-right">{{ __('user_type') }}</label>
                                                <div class="col-md-6">
                                                    <select id="semester" name="semester">

                                                        <option value="0">student</option>
                                                        <option value="1">admin</option>
                                                    </select>
                                                </div>
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
