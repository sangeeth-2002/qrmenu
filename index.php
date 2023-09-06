<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <!-- css links  -->

    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./project.css/menu.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- css links  -->



    <!-- js link  -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- js link  -->








</head>

<body>
    <?php

    require "spiner.php";

    ?>

    <div class="container-fluid mb-5 bg-light m-0  " style="overflow-x: hidden;">
        <div class="col-12 ">
            <div class="row justify-content-center">

                <!-- navbar start   -->

                <div class="col-12 row  p-3 nav_color">

                    <div class="col-lg-8 col-5 d-flex justify-content-start">
                        <div class="col-2 ">
                            <!-- <img src="./project.css/imge/logoo.png" alt=""> -->
                            <label for="" class="fw-bold font1 fs-3 text-warning">RESTAURANT</label>

                        </div>
                    </div>
                    <div class="col-lg-3 col-7 d-flex justify-content-center ">

                        <div class="col-12 d-flex justify-content-end">
                            <div class="col-12  search-input  d-none" id="search_input_div">
                                <i class=" fa-solid fa-magnifying-glass fa-flip-horizontal position-absolute fs-4 mt-2 me-4 ms-2"></i>

                                <input type="text" class="p-1 ps-5 font1 fs-5 w-100" placeholder="Search ?" style="border: none; outline: none; border-radius: 10px;">

                            </div>

                            <i class=" fa-solid fa-magnifying-glass fa-flip-horizontal text-white fs-4 mt-2" id="search_input_div2" style="cursor: pointer;" onclick="serchInputanimatio();"></i>




                        </div>

                    </div>
                    <div class="col-1 d-lg-block d-none text-center pt-2">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <div class=" bg-white s mb-4 ms-4 ps-1 pe-1 position-absolute fw-bold text-warning text-center" style="border-radius: 100%; font-size: 12px; width: 18px ; height: 18px;">10</div>
                            <i class="fa-solid fa-cart-plus fs-4  text-white"></i>
                        </div>

                    </div>


                </div>

                <!-- navbar end   -->


                <!-- owl carousel start  -->

                <div class="col-12 mt-3">
                    <div class="owl-carousel  ">
                        <?php

                        for ($x = 0; $x < 10; $x++) {
                            # co10de...
                        ?>
                            <div class="item corusel_item d-flex justify-content-end align-items-end" style="background-image: url(./project.css/imge/menuimg1.jpg);">
                                <div class="col-12 bg-gradient bottom-0 opacity-75 text-center" style="border-radius: 0px 0px 6px 6px;">
                                    <span class="text-white">Caca cola</span>

                                </div>

                            </div>



                        <?php
                        }
                        ?>

                        <?php

                        ?>



                    </div>
                </div>

                <!-- owl carousel end  -->


                <!-- main carousel start  -->

                <div class="col-12 mt-1">
                    <div class="row">
                        <div class="col-lg-6 col-12 h-75 overflow-hidden" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item c1 active">
                                    </div>
                                    <div class="carousel-item c2">
                                    </div>
                                    <div class="carousel-item c3 ">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 d-none d-lg-block" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item c4 active" data-bs-interval="6000">
                                    </div>
                                    <div class="carousel-item c5" data-bs-interval="6000">
                                    </div>
                                    <div class="carousel-item c6" data-bs-interval="6000">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- main carousel end  -->


                <!-- food menu lable start  -->

                <div class="col-12 row mt-1 hranimation">

                    <div class="col-12 d-flex justify-content-center mt-5 ">
                        <div class="col-12 col-lg-5 row">
                            <div class="col-3 d-none d-lg-block" data-aos="fade-right">
                                <hr class=" hr1" style="height: 15%;">
                            </div>
                            <div class="col-lg-6 col-12 d-flex justify-content-center">
                                <!-- <label for="" class="fs-1 font1 fw-bold">Food Menu</label> -->
                                <span class="fs-1 font1 fw-bold" data-aos="fade-right">F</span>
                                <span class="fs-1 font1 fw-bold" data-aos="fade-right">o</span>
                                <span class="fs-1 font1 fw-bold" data-aos="fade-right">o</span>
                                <span class="fs-1 font1 fw-bold" data-aos="fade-right">d</span>
                                &nbsp;
                                &nbsp;
                                <span class="fs-1 font1 fw-bold" data-aos="fade-left">M</span>
                                <span class="fs-1 font1 fw-bold" data-aos="fade-left">e</span>
                                <span class="fs-1 font1 fw-bold" data-aos="fade-left">n</span>
                                <span class="fs-1 font1 fw-bold" data-aos="fade-left">u</span>




                            </div>
                            <div class="col-3 d-none d-lg-block" data-aos="fade-left">
                                <hr class=" hr2" style="height: 15%;">
                            </div>


                        </div>


                    </div>



                </div>

                <!-- food menu lable end  -->


                <div class="col-12 row mt-5 d-flex justify-content-center mb-5">



                    <?php

                    require "Importphpfle/connection.php";

                    $food = Database::search("SELECT * FROM `foods`");
                    $food_num = $food->num_rows;




                    for ($i = 0; $i < $food_num; $i++) {

                        $food_data = $food->fetch_assoc();



                        # code...
                    ?>

                        <div class="col-lg-2 col-10 col-md-5  m-4 p-0 carditem" data-aos="zoom-in-up" style=" background-image: url(./project.css/imge/biriyani.jpg);">

                            <div class="row">
                                <div class="col-8  text-white bg-white opacity-75 ms-2   mb-5" style="border-radius:0px 0px 30px 0px; ">
                                    <label for="" class="text-black fw-bold fs-5 ps-2"> <?php echo($food_data["name"]) ?></label>
                                </div>
                                <div class="col-12 mt-5  d-flex justify-content-end">
                                    <div class="col-lg-5 col-4 bg-dark text-white ps-2 p-1" style="border-radius:6px 0px 0px 6px ;" onclick="addproduct();">
                                        <span>Customise</span>
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </div>

                                </div>

                                <div class="col-12 ">
                                    <div class="row mt-5 ">
                                        <div class="col-12 d-flex justify-content-start mt-5">
                                            <div class="col-12 bg-light opacity-75" style="border-radius:0px 0px 0px 15px ; ">
                                                <div class="row">
                                                    <div class="col-lg-6 col-7 d-flex align-items-center ps-4">
                                                        <span class="fw-bold">Rs.&nbsp;<?php echo($food_data["price"]) ?>.00</span>

                                                    </div>
                                                    <div class="col-lg-6  col-5">
                                                        <div class="col-12 text-white bg-black ms-0 d-flex justify-content-center  p-2" style="border-radius:0px 0px 0px 0px ; background-color: #01142c;  cursor: pointer;" onclick="addcarttogel('<?php echo($food_data['f_id']) ?>');" id="carttogel1<?php echo($food_data['f_id']) ?>">
                                                            <label for="" class="text-white fw-bold fs-5 ps-2" style="cursor: pointer;"><i class="fa-solid fa-plus fa-beat-fade fs-5"></i> Add</label>
                                                        </div>

                                                        <div class="col-12 text-white bg-black ms-0 p-2 d-none " id="carttogel2<?php echo($food_data['f_id']) ?>" style="border-radius:0px 0px 0px 0px ; background-color: #01142c;">

                                                            <div class="col-12 ">

                                                                <div class="row ">

                                                                    <div class="col-3">
                                                                        <button style="border: none; outline: none; background-color: transparent;" onclick="cartAddMinzesbut('<?php echo($food_data['f_id']) ?>');">
                                                                            <i class=" fa-solid fa-window-minimize text-white"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="col-6 d-grid">
                                                                        <!-- <label for="" class="fs-5">1</label> -->
                                                                        <input type="number" value="1" min="1" id="cartqty<?php echo($food_data['f_id']) ?>" class="w-100 border-0 text-center fw-bold  text-white fs-5" style="background-color: transparent; outline: none;">

                                                                    </div>

                                                                    <div class="col-3 d-flex justify-content-center align-items-center">
                                                                        <button style="border: none; outline: none; background-color: transparent;" onclick="cartAddPluesbut('<?php echo($food_data['f_id']) ?>');">
                                                                            <i class="fa-solid fa-plus text-white"></i>
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>


                                            </div>
                                        </div>

                                        <!-- <div class="col-6 mt-5 d-flex justify-content-end">


                                           

                                        </div>

                                        <div class="col-6 d-none   mt-5" id="carttogel2" style="">


                                           



                                        </div> -->
                                    </div>

                                </div>

                            </div>
                        </div>
                    <?php
                    }

                    ?>

                </div>

                <!-- food menu lable start  -->

                <div class="col-12 row mt-3 h">

                    <div class="col-12 d-flex justify-content-center mt-5 ">
                        <div class="col-12 row">

                            <div class="col-lg-12 col-12 d-flex justify-content-start">
                                <label for="" class="fs-1 font1 fw-bold">About As</label>

                            </div>



                        </div>


                    </div>



                </div>

                <!-- food menu lable end  -->



                <!-- fix footr start   -->






                <!-- fix footr end   -->



            </div>
        </div>
    </div>

    <div class="col-12 col-lg-2 d-lg-none  row p-3 m-0  position-sticky nav_color bottom-0  w-100">

        <div class="col-lg-8 col-2 col-md-3 d-flex justify-content-start">
            <div class="col-2 ">
                <!-- <img src="./project.css/imge/logoo.png" alt=""> -->
                <i class="fa-solid fa-bars-staggered text-white fs-1"></i>
                <span class="text-white-50">menu</span>
            </div>
        </div>

        <div class="col-8 col-md-6 d-flex justify-content-center align-items-center">
            <div class="col-12  text-center" id="cartdiv1" onclick="window.location='cart.php'">
                <!-- <div class=" bg-white s mb-4 ms-5 ps-1 pe-1 position-absolute fw-bold text-warning text-center" style="border-radius: 100%; font-size: 12px; width: 18px ; height: 18px;">10</div> -->
                <i class="fa-solid fa-cart-plus fs-1 text-white"></i>
                <br>
                <span class="text-white-50">Cart</span>
            </div>

            <div class="col-12  d-none  bg-white p-2 " style="border-radius: 20px;" id="cartdiv2">
                <div class="row">

                    <div class="col-2">
                        <div class="bg-black mb-5   ms-4 ps-1 pe-1 position-absolute fw-bold text-warning text-center" style="border-radius: 100%; font-size: 12px; width: 20px ; height: 18px;">10</div>

                        <i class="fa-solid fa-cart-shopping fs-1 mt-2"></i>

                    </div>
                    <div class="col-8 d-flex align-items-center ps-4">
                        <span class="fs-5 fw-bold">Rs. <input type="number" value="1000000000" class=" border-0   fw-bold" style="width: 60%;" disabled></span>
                    </div>
                    <div class="col-2 row d-flex justify-content-center align-items-center">
                        <!-- go -->
                        <i class="fa-solid fa-chevron-right fs-4 "></i>
                    </div>

                    <br>
                    <!-- <span class="">menu</span> -->
                </div>

            </div>


        </div>

        <div class="col-2 col-md-3 d-flex justify-content-end align-items-center pe-5">
            <div class="col-2 ">

                <i class="fa-solid fa-gear fs-1 text-white"></i>
                <span class="text-white-50">menu</span>

            </div>
        </div>


    </div>
    </div>



    <script>
        function addproduct() {

            var request = new XMLHttpRequest();
            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    var text = request.responseText;
                    alert(text);


                }
            };
            request.open("GET", "addproduct.php", false);
            request.send();
        }


        function serchInputanimatio() {
            alert("ok");
            document.getElementById("search_input_div").classList.remove("d-none");
            document.getElementById("search_input_div").classList.add("search-input");

            document.getElementById("search_input_div2").classList.add("d-none");


        }

        function addcarttogel(id) {
            // alert("id");
            document.getElementById("carttogel2"+id).classList.remove("d-none");
            document.getElementById("carttogel2"+id).classList.add("carttogeldiv2");

            document.getElementById("carttogel1"+id).classList.add("d-none");

            document.getElementById("cartdiv1"+id).classList.add("d-none");
            document.getElementById("cartdiv2"+id).classList.remove("d-none");




            // var req = new XMLHttpRequest();

            // req.onreadystatechange = function() {
            //     if (req.readyState == 4) {
            //         var text = req.responseText;
            //         alert(text);
            //     }
            // }

            // req.open("GET", "text.php", true);
            // req.send();


        }



        // cart add


        function cartAddPluesbut(id) {
            // alert("ok")
            var qty = document.getElementById("cartqty"+id).value;

            qtyInt = parseInt(qty);
            qtyInt = qtyInt + 1;


            document.getElementById("cartqty"+id).value = qtyInt;


        }

        function cartAddMinzesbut(id) {
            // alert("ok")
            var qty = document.getElementById("cartqty"+id).value;

            if (qty > 1) {
                qtyInt = parseInt(qty);
                qtyInt = qtyInt - 1;


                document.getElementById("cartqty"+id).value = qtyInt;
            }




        }


        // cart add end 



        var owl = $('.owl-carousel');
        owl.owlCarousel({
            // items: 10,
            loop: true,
            margin: 70,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,

            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 8
                }
            }

        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })

        AOS.init();
    </script>

</body>

</html>