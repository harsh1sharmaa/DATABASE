<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">






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

        .card {
            min-height: 200px;
        }

        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="./assets/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                sort
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li> <i class="fa-solid fa-sort-up m-4 " id="incre"></i>



                                </li>
                                <li><i class="fa-solid fa-sort-down m-4" id="decre"></i></li>


                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger" href="./cart.php" tabindex="-1" aria-disabled="true">Go To Cart</a>
                        </li>
                    </ul>


                    <input class="form-control me-2 w-25 p-3" type="search" placeholder="Search" aria-label="Search" type="text" id="option">
                    <button class="btn btn-outline-success" id="filter" onclick="filter()">search</button>
                </div>
            </div>
        </nav>




        <!-- <ul class="nav justify-content-center" id="filter">

            <li class="nav-item">
                <a class="nav-link" href="#">phone</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">laptop</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-danger" href="./cart.php" tabindex="-1" aria-disabled="true">Go To Cart</a>
            </li>
        </ul>
        <label class="btn btn-primary">Category</label>
        <input type="text" id="option">
        <button id="filter" onclick="filter()">search</button>

        <i class="fa-solid fa-sort-up m-4 " id="incre"></i>


        <i class="fa-solid fa-sort-down" id="decre"></i> -->



        <div>
            <!-- <nav aria-label="..."> -->
            <ul class="pagination" id="paginaton">

            </ul>
            <!-- </nav> -->
        </div>



        <div class="single-product-area">

            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row" id="products">
                    <!-- dynamic listing -->
                </div>
            </div>
        </div>





    </div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="display.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>