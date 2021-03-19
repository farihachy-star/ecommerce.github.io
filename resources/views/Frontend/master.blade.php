<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Fresh</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    @include('partials.nav')

    <section class="header">
        <div class="flex">
            <!-- <div class="side_menu" id="side_menu">
                <div class="head_img">
                    <img src="img/colorful-sale-banner-template_1201-1280.jpg" alt="img">
                </div>
                <ul class="p">
                    <li><a href="#">On Sale <i class="fas fa-arrow-right arrow"></i> </a></li>
                    <li><a href="">Fruits <i class="fas fa-arrow-right arrow"></i> </a></li>
                    <li><a href="">Vegetables<i class="fas fa-arrow-right arrow"></i> </a></li>
                    <li><a href="#">Meats<i class="fas fa-arrow-right arrow"></i></a> </li>
                    <li> <a href="">Eggs<i class="fas fa-arrow-right arrow"></i></a>  </li>
                    <li> <a href="">Milk<i class="fas fa-arrow-right arrow"></i></a>  </li>
                    <li> <a href="">Juice<i class="fas fa-arrow-right arrow"></i></a>  </li>
                    
    
                </ul>
            </div> -->


            @include('partials.vid')
        </div>
        </div>

    </section>


    <section class="category" id="category">
        <div class="container py-5">
            <h4>Category</h4>
            <hr>
        </div>
        <div id="carouselExampleControls" class="carousel mx-auto" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <div class="container">
                        <div class="row">
                            <div class=" col-md-3 special">
                                <div class="box">
                                    <div class="box_img">
                                        <img src="img/vegetable.png" alt="img">
                                    </div>
                                    <a href="">
                                        <h4>Vegetables</h4>
                                    </a>

                                </div>
                            </div>

                            <div class=" col-md-3">
                                <div class="box">

                                    <div class="box_img">
                                        <img src="img/drink.png" alt="img">
                                    </div>
                                    <a href="">
                                        <h4>Juice</h4>
                                    </a>

                                </div>
                            </div>
                            <div class=" col-md-3">
                                <div class="box">
                                    <div class="box_img">
                                        <img src="img/fruits.png" alt="img">
                                    </div>

                                    <a href="">
                                        <h4>Fruits</h4>
                                    </a>

                                </div>
                            </div>

                            <div class=" col-md-3">
                                <div class="box">
                                    <div class="box_img">
                                        <img src="img/thanksgiving.png" alt="img">
                                    </div>
                                    <a href="">
                                        <h4>Meat</h4>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-md-3 col-sm-12">
                                <div class="box">
                                    <div class="box_img">
                                        <img src="img/fish.png" alt="img">
                                    </div>
                                    <a href="">
                                        <h4>Fish</h4>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box">
                                    <div class="box_img">
                                        <img src="img/eggs.png" alt="img">
                                    </div>
                                    <a href="">
                                        <h4>Egg</h4>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box">
                                    <div class="box_img">
                                        <img src="img/milk.png" alt="img">
                                    </div>
                                    <a href="">
                                        <h4>Milk</h4>
                                    </a>

                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="box">
                                    <div class="box_img">
                                        <img src="img/honey.png" alt="img">
                                    </div>
                                    <a href="">
                                        <h4>Honey</h4>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>


                </div>


                <!-- <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                              
                            </div>
                            <div class="col-md-3">
                             
                            </div>
                            <div class="col-md-3">
                            
                            </div>

                            <div class="col-md-3">

                            </div>
                            
                        </div>
                   
                  </div> -->

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <i class="fas fa-arrow-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <i class="fas fa-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>










    </section>

    <!-- Product -->
    <main class="py-4">
        @yield('content')
    </main>
    <!-- Product -->

    <section class="banner">
        <div class="banner_wrap">
            <img src="img/cover1.jpg" alt="img" style="height: 80%">
        </div>
    </section>


    @include('partials.blog')
    @yield('footer')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- isotop javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
        crossorigin="anonymous"></script>

    <script src="{{asset('js/main.js')}}"></script>



</body>

</html>