<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,600,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>


  <!--Navigation bar Starts from here-->
  <div class="container-fluid bg bg-dark">
    <div class="container">
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand " href="#"><img class="border border-warning " id="user" src="images/icon.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
          aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link text-white" href="#">Login </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white fa fa-plus mt-1 " id="plus" href="">Add Video</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
          <div class="input-group " id="searchBox">
            <input type="text" class="form-control " placeholder="Search here" aria-label="Recipient's username"
              aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-success text-white" type="button">Search</button>
            </div>
          </div>


          <a href=""><img class="border border-success" id="user" src="images/user.jpg"></a>

        </div>
    </div>
    </nav>
  </div>
  </div>
  <!--Navigation bar Ends from here-->
  </head>