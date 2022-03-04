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


    <main class="form-signin">
        <form action="./controlr.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">Ragistor</h1>

            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="paswrd" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">email</label>
            </div>
            



            <button class="w-100 btn btn-lg btn-primary" action="ragistor" type="submit">Ragistor</button>
            <p class="mt-5 mb-3 text-muted">&copy; CEDCOSS Technologies</p>
        </form>
    </main>
</body>

</html>