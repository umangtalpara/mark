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


                                            <div class="form-group">
                                                <label for="usr">select sem:</label>
                                                {{-- <div class="drop_sem"> --}}
                                                <select id="semester" name="semester">

                                                    <option value="1">sem_1</option>
                                                    <option value="2">sem_2</option>
                                                    <option value="3">sem_3</option>
                                                    <option value="4">sem_4</option>
                                                    <option value="5">sem_5</option>
                                                    <option value="6">sem_6</option>
                                                    <option value="7">sem_7</option>
                                                    <option value="8">sem_8</option>
                                                </select>
                                                {{-- </div> --}}
                                            </div>

                                            <div class="form-group">
                                                <label for="usr">Subject Name:</label>
                                                <input type="text" class="form-control" name='Subject_Name'
                                                    placeholder="Enter Name">
                                            </div>

                                            <div class="form-group">
                                                <label for="usr">Subject Code:</label>
                                                <input type="text" class="form-control" name='Subject_Code'
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


<style>
    .drop_sem {
        tab-size: 100;
    }

    .select#semester {
        size: 100px;
    }

</style>
