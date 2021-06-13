<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <title>add mark</title>

</head>

<body>
    <form method="post" action="{{ route('mark.store') }}">
        @csrf
        <div class="container">
            <h2>add mark</h2>

            <div class="card-deck">
                <div class="card bg-primary">
                    <div class="card-body text-center">

                        <div class="form-group">
                            <label for="usr">e_no:</label>
                            <input type="text" class="form-control" name='e_no' placeholder="Enter e_no ">
                        </div>
                        <div class="form-group">
                            <label for="usr">sub1:</label>
                            <input type="text" class="form-control" name='sub1' placeholder="Enter sub1 mark ">
                        </div>

                        <div class="form-group">
                            <label for="usr">sub2:</label>
                            <input type="text" class="form-control" name='sub2' placeholder="Enter sub2 mark">
                        </div>

                        <div class="form-group">
                            <label for="usr">sub3:</label>
                            <input type="text" class="form-control" name='sub3' placeholder=" Enter sub3 mark">
                        </div>

                        <div class="form-group">
                            <label for="usr">sub4:</label>
                            <input type="text" class="form-control" name='sub4' placeholder=" Enter sub4 mark">
                        </div>

                        <div class="form-group">
                            <label for="usr">total:</label>
                            <input type="text" class="form-control" name='total' placeholder=" Enter total mark">
                        </div>

                        <div class="form-group">
                            <label for="usr">avg:</label>
                            <input type="text" class="form-control" name='avg' placeholder=" Enter avg mark">
                        </div>


                        <input type="submit" value="Submit"><br><br>
                        <button><a href="{{ route('mark.index') }}">Show mark list</a></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>


<style>
    .card-deck {
        width: 500px;
        height: 525px;
    }

</style>
