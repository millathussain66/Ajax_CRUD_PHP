<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax_CRUD_PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>


    <div class="container m-auto">
        <div class="">

            <div class="card">

                <div class="card-header"> Ajax Crud With PHP </div>
                <div class="card-body">

                    <div class="w-75 m-auto">
                        <div class="form-group">
                            <input id="name" type="text" class="form-control" placeholder="Enter Your Name ">
                        </div>
                        <div class="form-group">
                            <input id="roll" type="number" class="form-control" placeholder="Enter Your Roll">
                        </div>
                        <div class="form-group">
                            <input id="address" type="text" class="form-control" placeholder="Enter Your Address">
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control" placeholder="Enter Your Address">
                        </div>



                        <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>




                </div>

                <div id="reload">

                <div class="">
                    <button class="btn btn-info mb-2">Riding Data </button>
                </div>

                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">ROLL</th>
                                <th scope="col">ADDRESS</th>
                            </tr>
                        </thead>
                        <tbody id="t_body">

                        </tbody>
          
                    </table>


                </div>


            </div>
        </div>
    </div>











    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
</body>

</html>