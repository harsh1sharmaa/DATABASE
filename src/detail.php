
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="one.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
</head>

<body>

    <div class="container-fluid">
        <div class="content">
            <div class="top">
                <a class="gray">home ></a>
                <a class="gray">Shop ></a>
                <a>Android phone ></a>
            </div>
            <div id="dynamic">
            





            </div>
            <div>

                <div id="options" class="">
                    <div class="row">
                        <div class=" col-sm-12 col-md-4" >
                            <div class="d-flex">
                                <h1> <i class="fa-solid fa-cart-plus m-3"></i></h1>
                                <div>
                                    <h4>free shoping</h4>
                                    <p>for purchases over $50</p>
                                </div>
    
                            </div>

                        </div>
                        <div class=" col-sm-12 col-md-4">
                            <div class="d-flex">

                                <h1> <i class="fa-solid fa-shield m-3"></i></h1>
                                <div>
                                    <h4>secure Payment</h4>
                                    <p>for online transaction</p>
                                </div>
    
                            </div>

                        </div>
                        <div class=" col-sm-12 col-md-4">
                            <div class="d-flex">
                                <h1><i class="fa-solid fa-bolt m-3"></i></h1>
                                <div class="">
                                    <h4>same day shipping</h4>
                                    <p>for purchases till 6:00 pm EST</p>
                                </div>
    
                            </div>
                        </div>
                    <!-- <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <h1> <i class="fa-solid fa-cart-plus m-3"></i></h1>
                            <div>
                                <h4>free shoping</h4>
                                <p>for purchases over $50</p>
                            </div>

                        </div>
                        <div class="d-flex">

                            <h1> <i class="fa-solid fa-shield m-3"></i></h1>
                            <div>
                                <h4>secure Payment</h4>
                                <p>for online transaction</p>
                            </div>

                        </div>
                        <div class="d-flex">
                            <h1><i class="fa-solid fa-bolt m-3"></i></h1>
                            <div class="">
                                <h4>same day shipping</h4>
                                <p>for purchases till 6:00 pm EST</p>
                            </div>

                        </div>

                    </div> -->
                   </div>

                </div>
            </div>
        </div>
        <div id="footr" class="p-4">

            <div class="d-flex justify-content-between m-4">
                <div>
                    <h1>jevelin</h1>
                </div>
                <div id="icons">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
            </div>

            <div class="row">
                <div class=" col-sm-12 col-md-3">
                    <h6>start crfting epic <strong>website</strong> today</h6>
                    <button type="button" class="btn btn-primary">purchases them</button>
                </div>
                <div class="  col-sm-12 col-md-3">
                    <strong>Useful</strong>
                    <p>Documentation intro video showcase</p>
                </div>
                <div class="  col-sm-12 col-md-3">
                    <strong>Keep in touch</strong>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, quisquam.</p>
                    <strong>dad@dsdffd</strong>
                </div>
                <div class=" col-sm-12 col-md-3">
                    <strong>Sign up for news latter</strong>
                    <form class="d-flex">

                        <input class="form-control me-2" type="search" placeholder="E-mail address" aria-label="Search">
                        <button class="btn btn-sm btn-outline-secondary" type="button">Send</button>
                    </form>

                </div>
            </div>
            <div class="d-flex privacy justify-content-between">
                <div>
                    @ 2021 jevelin. crafted by <strong> shufflemhound</strong>
                </div>
                <div>
                    <strong> privacy policy</strong>
                    <strong> term & condition</strong>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="id" value="<?php echo $_GET['id']; ?>">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="detail.js"></script>
</body>

</html>