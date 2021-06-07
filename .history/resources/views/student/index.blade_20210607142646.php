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
                                                <label for="usr">Student Name:</label>
                                                <input type="text" class="form-control" value="<?= $mark->name ?>" name='name'>
                                                </div>

                                                <div class="form-group">
                                                    <label for="usr">Sudent e_no:</label>
                                                    <input type="text" class="form-control" value="<?= $mark->e_no ?>" name='e_no'>
                                                    </div>
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

</style>
