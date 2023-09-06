<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>


    <!-- css links  -->

    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./project.css/cart.css">
    <link rel="stylesheet" href="./project.css/menu.css">




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />



    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>



    <style>
        .deleteHover:hover {
            color: red;
        }

        .add-to-cart-button {
            background-color: #01142c;
            border: none;
            border-radius: 0px 6px 0px 10px;
            box-shadow: 0 3px 13px -2px rgba(0, 0, 0, 0.15);
            color: #ffffff;
            display: flex;
            font-family: "Ubuntu", sans-serif;
            justify-content: space-around;
            /* min-width: 195px; */
            overflow: hidden;
            outline: none;
            padding: 0.7rem;
            position: absolute;
            text-transform: uppercase;
            transition: 0.4s ease;
            width: 50px;
            height: 40px;
        }

        .add-to-cart-button.added {
            background: rgba(255, 230, 0, 0.658);
            /* box-shadow: 0 0 0 0.2rem #146230; */
        }

        .add-to-cart-button.added .add-to-cart {
            display: none;
        }

        .add-to-cart-button.added .added-to-cart {
            display: block;
        }

        .add-to-cart-button.added .cart-icon {
            animation: drop 0.3s forwards;
            -webkit-animation: drop 0.3s forwards;
            -webkit-animation-delay: 0.18s;
            animation-delay: 0.18s;
        }

        .add-to-cart-button.added .box-1,
        .add-to-cart-button.added .box-2 {
            top: 18px;
        }

        .add-to-cart-button.added .tick {
            animation: grow 0.6s forwards;
            -webkit-animation: grow 0.6s forwards;
            -webkit-animation-delay: 0.7s;
            animation-delay: 0.7s;
        }

        .add-to-cart,
        .added-to-cart {
            margin-left: 36px;
        }

        .added-to-cart {
            display: none;
            position: relative;
        }

        .add-to-cart-box {
            height: 5px;
            position: absolute;
            top: 0;
            width: 5px;
        }

        .box-1,
        .box-2 {
            transition: 0.4s ease;
            top: -8px;
        }

        .box-1 {
            left: 23px;
            transform: rotate(45deg);
        }

        .box-2 {
            left: 32px;
            transform: rotate(63deg);
        }

        .cart-icon {
            left: 15px;
            position: absolute;
            top: 8px;
        }

        .tick {
            background: #146230;
            border-radius: 50%;
            position: absolute;
            left: 28px;
            transform: scale(0);
            top: 5px;
            z-index: 2;
        }

        @-webkit-keyframes grow {
            0% {
                -webkit-transform: scale(0);
            }

            50% {
                -webkit-transform: scale(1.2);
            }

            100% {
                -webkit-transform: scale(1);
            }
        }

        @keyframes grow {
            0% {
                transform: scale(0);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        @-webkit-keyframes drop {
            0% {
                -webkit-transform: translateY(0px);
            }

            100% {
                -webkit-transform: translateY(1px);
            }
        }

        @keyframes drop {
            0% {
                transform: translateY(0px);
            }

            100% {
                transform: translateY(1px);
            }
        }

        /* Page style */
        .container {
            align-items: center;
            display: flex;
            height: 100vh;
            justify-content: center;
            width: 100%;
        }
    </style>



</head>

<body>

    <?php

    require "spiner.php";

    ?>

    <div class="container-fluid mb-5 bg-light m-0 p-0 " style="overflow-x: hidden;">
        <div class="col-12 ">
            <div class="row justify-content-center">

                <!-- navbar start   -->

                <div class="col-12 row  p-3 nav_color">
                    <div class="col-3 text-center pt-2">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-angle-left fs-3
                             text-white" onclick="window.location='index.php'"></i>
                        </div>

                    </div>

                    <div class=" col-6 d-flex justify-content-center">
                        <div class="col-12 d-flex justify-content-center">
                            <!-- <img src="./project.css/imge/logoo.png" alt=""> -->
                            <label for="" class="fw-bold font1 fs-3 text-warning">Cart</label>

                        </div>
                    </div>
                    <div class="col-3 d-flex justify-content-center ">
                        <!-- <div class="col-12 d-grid">
                            <button class=" border-0   " style="outline: none; border-radius: 15px;">Edite</button>

                        </div> -->
                    </div>



                </div>

                <!-- navbar end   -->

                <div class="col-12 row mt-5 d-flex justify-content-center  p-0">



                    <?php



                    for ($i = 0; $i < 10; $i++) {


                        # code...
                    ?>


                        <div class="col-12 col-md-6 col-lg-3 " data-aos="zoom-out-down" id="detecartdiv1">
                            <div class="col-1 position-absolute end-0">
                                <div class="  bg-white   mt-3     text-center" id="cartedibut1" style="height: 20px; width: 20px; border-radius: 50px; background-color: white;" onclick="editecart();">
                                    <i class="fa-solid fa-xmark text-danger"></i>
                                </div>

                                <div class="  bg-white   mt-3  d-none   text-center" id="cartedibut2" style="height: 20px; width: 20px; border-radius: 50px; background-color: white;" onclick="editecart2();">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>



                            <div class="col-lg-11 col-11 col-md-11 ps-3  m-4 p-2 cartitem">




                                <div class="row justify-content-center">


                                    <div class="col-12 justify-content-center">
                                        <div class="row">

                                            <div class="col-5 " style="background-image: url('./project.css/imge/biriyani.jpg'); height: 10vh; background-size: cover; background-repeat: no-repeat;">

                                            </div>
                                            <div class="col-7 p-4 d-flex justify-content-center align-items-center ">
                                                <div class="col-12 d-flex justify-content-center align-items-center">



                                                    <div class="row">


                                                        <div class="col-3 " style="border-radius: 15px; background-color: #01142c;" onclick="cartAddMinzesbut();">
                                                            <div class="col-12  d-flex justify-content-center align-items-center p-2">
                                                                <i class="fa-solid fa-minus text-warning"></i>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <input type="number" value="1" min="1" id="cartqty" class="w-100 border-0 text-center fw-bold  fs-5" style="background-color: transparent; outline: none;">
                                                        </div>
                                                        <div class="col-3 " style="border-radius: 15px; background-color: #01142c;" onclick="cartAddPluesbut();">
                                                            <div class="col-12  text-center p-1">
                                                                <i class="fa-solid fa-plus text-warning"></i>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>




                                            </div>



                                            <div class="col-12 mt-4 m">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="" class="fw-bold fs-6">fkh</label>
                                                    </div>

                                                    <div class="col-6 d-flex justify-content-end">
                                                        <label for="" class="fw-bold fs-6">Rs:&nbsp;10000000000.00</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 p-2">
                                                <hr>

                                            </div>

                                            <div class="col-12 " id="cartedteremovediv1">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="">
                                                        <h7 class="accordion-header">
                                                            <button class="accordion collapsed w-100 fs p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="border: none;">
                                                                <div class="col-12 row">
                                                                    <div class="col-11 fs-6">
                                                                        Product Deatiles & Customisation
                                                                    </div>
                                                                    <div class="col-1 text-center">
                                                                        <i class="fa-solid fa-chevron-down"></i>
                                                                    </div>


                                                                </div>

                                                            </button>
                                                        </h7>
                                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <strong>This is the second item's accordion body.</strong>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                </div>



                            </div>

                        </div>


                        <div class="col-1 d-flex  align-items-center d-none m-0 p-0" id="detecartdiv2">
                            <i class="fa-regular fa-trash-can fs-5"></i>
                        </div>

                    <?php
                    }

                    ?>

                </div>

                <!-- food menu lable start  -->


                <!-- owl carousel start  -->

                <div class="col-12 ms-3 mt-3">
                    <label class="fw-bold">Frequently Bought Together</label>
                </div>

                <div class="col-11 mt-3 mb-2 p-1">
                    <div class="owl-carousel  ">
                        <?php

                        for ($x = 0; $x < 10; $x++) {
                            # co10de...
                        ?>

                            <div class="item corusel_item d-flex justify-content-start align-items-end overflow-hidden" style="background-image: url(./project.css/imge/menuimg1.jpg);">

                                <div class=" top-0 position-absolute end-0  p-0 bg-black" style="margin-right: 33%;">
                                    <button class="add-to-cart-button">
                                        <svg class="add-to-cart-box box-1" width="5" height="5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="10" height="10" rx="1" fill="#ffffff" />
                                        </svg>
                                        <svg class="add-to-cart-box box-2" width="5" height="5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="10" height="10" rx="1" fill="#ffffff" />
                                        </svg>
                                        <svg class="cart-icon text-warning" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="9" cy="21" r="1"></circle>
                                            <circle cx="20" cy="21" r="1"></circle>
                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                        </svg>
                                        <svg class="tick" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                            <path fill="none" d="M0 0h24v24H0V0z" />
                                            <path fill="#ffffff" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM9.29 16.29L5.7 12.7c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L10 14.17l6.88-6.88c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-7.59 7.59c-.38.39-1.02.39-1.41 0z" />
                                        </svg>

                                    </button>
                                </div>

                                <div class="col-12 bg-gradient bottom-0 opacity-75 text-center" style="border-radius: 0px 0px 6px 6px;">
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="text-white" style="font-size: 12px;">Caca cola</span>

                                        </div>

                                        <div class="col-6">
                                            <span class="text-white" style="font-size: 12px;">RS 20000</span>

                                        </div>

                                    </div>

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

                <div class="col-11">
                    <div class="row border p-2 pt-4 pb-4">
                        <div class="col-6 ">
                            <div class="col-12">

                                <span class="fw-bold">Sub Total</span>

                            </div>
                            <div class="col-12 mt-3">

                                <span class="fw-bold">Sub Total</span>

                            </div>
                            <div class="col-12 mt-3">

                                <span class="fw-bold">Sub Total</span>

                            </div>

                        </div>

                        <div class="col-6 ">
                            <div class="col-12 d-flex justify-content-end">

                                <span>Rs:&nbsp;1000000.00</span>

                            </div>
                            <div class="col-12 mt-3 d-flex justify-content-end">

                                <span class="text-success">Rs:&nbsp;1000000.00</span>

                            </div>
                            <div class="col-12 mt-3 d-flex justify-content-end">

                                <span>Rs:&nbsp;1000000.00</span>

                            </div>

                        </div>

                        <div class="col-12 mt-3">
                            <hr>
                        </div>

                        <div class="col-6 ">
                            <div class="col-12">

                                <span class="fw-bold">Grand Total</span>

                            </div>


                        </div>

                        <div class="col-6 ">
                            <div class="col-12 d-flex justify-content-end">

                                <span>Rs:&nbsp;1000000.00</span>

                            </div>


                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 col-lg-2 d-lg-none  p-3 m-0  position-sticky nav_color bottom-0  w-100" style="z-index: 9999999999;">

        <div class="row">

            <div class="col-8 row">
                <div class="col-12">
                    <span class="fw-bold fs-4 text-warning">30</span>
                    <label class="text-white fs-5"> Items in cart</label>

                </div>
                <div class="col-12  row">
                    <div class="col-6 ">
                        <label class="text-white-50">You pay : Rs</label>

                    </div>

                    <div class="col-6 p-0 m-0">
                        <input type="text" class="border-0 fw-bold text-warning" style="outline: none; background-color: transparent;" value="1000000">

                    </div>

                </div>

            </div>

            <div class="col-4  d-flex justify-content-end align-items-end">

                <button class="border-0 w-100 p-2 bg-warning  fw-bold" style="outline: none; border-radius: 50px;">Pay</button>

            </div>


        </div>


    </div>
    </div>


    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <script>
        function cartAddPluesbut() {
            // alert("ok")
            var qty = document.getElementById("cartqty").value;

            qtyInt = parseInt(qty);
            qtyInt = qtyInt + 1;


            document.getElementById("cartqty").value = qtyInt;


        }

        function cartAddMinzesbut() {
            // alert("ok")
            var qty = document.getElementById("cartqty").value;

            if (qty > 1) {
                qtyInt = parseInt(qty);
                qtyInt = qtyInt - 1;


                document.getElementById("cartqty").value = qtyInt;
            }




        }


        function editecart() {

            alert("ok");
            document.getElementById("detecartdiv1").classList.remove("col-12");
            document.getElementById("detecartdiv1").classList.add("col-11");

            document.getElementById("detecartdiv1").classList.remove("col-md-6");
            document.getElementById("detecartdiv1").classList.add("col-md-5");

            document.getElementById("detecartdiv1").classList.remove("col-lg-3");
            document.getElementById("detecartdiv1").classList.add("col-lg-2");

            document.getElementById("cartedibut1").classList.add("d-none");
            document.getElementById("cartedibut2").classList.remove("d-none");

            document.getElementById("cartedteremovediv1").classList.add("d-none");


            document.getElementById("detecartdiv2").classList.remove("d-none");


        }

        function editecart2() {
            alert("ok");
            document.getElementById("detecartdiv1").classList.remove("col-11");
            document.getElementById("detecartdiv1").classList.add("col-12");

            document.getElementById("detecartdiv1").classList.remove("col-md-5");
            document.getElementById("detecartdiv1").classList.add("col-md-6");

            document.getElementById("detecartdiv1").classList.remove("col-lg-2");
            document.getElementById("detecartdiv1").classList.add("col-lg-3");

            document.getElementById("cartedibut2").classList.add("d-none");
            document.getElementById("cartedibut1").classList.remove("d-none");

            document.getElementById("cartedteremovediv1").classList.remove("d-none");


            document.getElementById("detecartdiv2").classList.add("d-none");


        }


        addToCartButton = document.querySelectorAll(".add-to-cart-button");

        document
            .querySelectorAll(".add-to-cart-button")
            .forEach(function(addToCartButton) {
                addToCartButton.addEventListener("click", function() {
                    addToCartButton.classList.add("added");
                    setTimeout(function() {
                        addToCartButton.classList.remove("added");
                    }, 2000);
                });
            });


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