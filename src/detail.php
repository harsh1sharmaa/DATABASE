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
            <div class=" row  mt-5">
                <div class="col col-sm-12 col-md-6">
                    <img src="xiaomi-redmi-note10-pro-1.jpg" alt="..." class="img-thumbnail">


                </div>
                <div class=" col col-sm-12 col-md-6 p-5 ">
                    <h1 class="float-left">Android Phone</h1>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <h4 class="m-2 "><del>$199</del></h4>
                            <h2 class="font-weight-bold">$179</h2>
                        </div>
                        <div>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            (1 review)
                        </div>
                    </div>
                    <div class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae incidunt est ipsum illo mollitia
                        non
                        pariatur aliquid ipsa laudantium voluptate. Lorem ipsum dolor sit amet consectetur.
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <div class="d-flex input">

                            <h1> <i class="fa-solid fa-circle-arrow-up m-4"></i></h1>
                            <h3 class="m-4">1</h3>
                            <h1><i class="fa-solid fa-circle-down m-4"></i></h1>



                        </div>
                        <div>
                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i>add To
                                Cart</button>
                        </div>
                    </div>
                    <div>
                        <p>SKU :<a class="gray">12</a></p>
                        <p>category : <a href="#">phone</a></p>
                        <p>tag : <a class="gray">screen</a></p>
                        <!-- <p> <i class="fa-solid fa-share-nodes p-3 share "> </i>share</p> -->
                        <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-share-nodes p-2 ">
                            </i>share</button>

                    </div>
                    <div>

                    </div>
                    <div>
                        <div class="links d-flex">
                            <a href="#" class="ext-sm-center nav-link   m-3 float-left ">description</a>
                            <a href="#" class="ext-sm-center nav-link disabled  m-3 ">review</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati praesentium quam
                            exercitationem architecto. Omnis perspiciatis eaque porro dolores minus expedita animi eum
                            eos?
                        </p>
                    </div>



                </div>
                <!-- <div class="">
                    <div class="shadow-lg p-1 ml-1 bg-body rounded">
                        <p> <i class="fa-solid fa-truck-container"></i></p>
                        <p> <i class="fa-solid fa-bus"></i></p>
                        <p> <i class="fa-solid fa-drone-front"></i></p>
                        <p> <i class="fa-solid fa-globe"></i></p>
                    </div>

                </div> -->
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




</body>

</html>