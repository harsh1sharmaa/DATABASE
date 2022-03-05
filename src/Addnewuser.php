<?php
session_start();
// session_unset();
// session_destroy();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="./assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <!-- <main class="form-signin"> -->
        <div class="container">
        <div class="alert alert-info" role="alert">
  Enter fields for New User
</div>
    <form action='controlr.php' method="GET" class="row g-3">
    <div class="col-md-6">
    <label for="inputEmail4" class="form-label">username</label>
    <input type="text" name="uname" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="pswrd" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">role</label>
    <input type="text"  name="role" class="form-control" id="inputAddress" placeholder="amin pr customer">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">initial permission</label>
    <input type="text" name="permission" class="form-control" id="inputAddress2" placeholder="true or false">
  </div>
  <input type="hidden" name="action" value="addnewUser">
 
  <div>
<button type="submit" class="btn btn-primary">Add user</button>
</div>
</form>

</div>

    <!-- </main> -->



</body>

</html>