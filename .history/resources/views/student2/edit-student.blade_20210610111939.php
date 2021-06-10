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
    <link href=" https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        rel="stylesheet" type="text/css" />
    <title>edit-student</title>

</head>

<body>
    <form method="post" action="{{ route('student.update', $student->id) }}">

        @csrf
        @method("put")
        <div class="container">
            <h2>edit student</h2>

            <div class="card-deck">
                <div class="card bg-primary">
                    <div class="card-body text-center">

                        <div class="form-group">
                            <label for="usr">e_no:</label>
                            <input type="text" class="form-control" value="<?= $student->e_no ?>" name='e_no' placeholder="Enter e_no">
                  </div>
                        <div class="form-group">
                            <label for="usr">Name:</label>
                            <input type="text" class="form-control" value="<?= $student->name ?>" name='name' placeholder="Enter Name">
                      </div>
    
                      <div class="form-group">
                        <label for="usr">Email:</label>
                        <input type="email" class="form-control" value="<?= $student->email ?>" name='email' placeholder="Enter email">
                      </div>
    
                      <div class="form-group">
                        <label for="usr">Password:</label>
                        <input type="password" class="form-control"  value="<?= $student->password ?>" name='password' placeholder="Enter password">
                      </div>
    
                      <div class="form-group">
                        <label for="usr">Mobile_no:</label>
                        <input type="text" class="form-control" value="<?= $student->mobile ?>" name='mobile' placeholder=" Enter mobile-no">
                      </div>
    
                      <div class="form-group">
                        <label for="usr">DOB:</label>
                      <!--Date picker -->
                      <input id="datepicker" name="dob" value="<?= $student->dob ?>" placeholder=" Enter DOB" width="437" />
                      <script>
                          $('#datepicker').datepicker({
                              uiLibrary: 'bootstrap4'
                          });
                      </script>
                      </div>
    
                      <div class="form-group">
                        <label for="usr">Address:</label>
                        <input type="text" class="form-control" value="<?= $student->address ?>" name='address' placeholder=" Enter address">
                      </div>
                      
                      <input type="submit" value="Submit" ><br><br>
                      {{-- <button><a href="{{route('mark')}}">Show mark list</a></button> --}}
                     </div>
                  </div>
              </div>
            </div>
          </form>    
        </body>
    </html>
    
    
    <style>
    .card-deck{
      width: 500px;
      height: 525px;
    }
    </style>
    
   
    
