<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEFT UP</title>
    <link rel="shortcut icon" href="https://1drv.ms/i/s!AsLe6EMbkhcGgTVJYFM9v0N1XUzG?e=iczpe2" />

    <!-- Library Fontawesme -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css" />
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- css bootstrap Style -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap.min.css') }}">

    <!-- css Style -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/main.css') }}">
    <!-- Flickity -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <a class="nav-link active" aria-current="page" href="{{ route('website.langEn.myCar') }}">My cars</a>
            <a class="nav-link pe-0 pb-3" href="{{ route('website.langEn.myBooking') }}">My bookings</a>
            <a class="nav-link pb-3" href="{{ route('website.langEn.myCar') }}">Book service</a>


            <a class="nav-link pb-3" href="{{ route('website.langEn.myCar') }}">More</a>
        </div>
    </div>

    <main>
        <div class="">
            <!-- Start nav -->
            <nav class="navbar navbar-expand-lg  px-sm-4" id="navbar-example2">
                <div class="container-fluid NavCon">
                    <a class="navbar-brand pe-5" href="#">
                        <div class="img  d-flex justify-contents-center align-items-center">
                            <img src="{{ asset('website/assets/img/LOGO_LEFT_UP-removebg-preview.png') }}"
                                loading="lazy" alt="Logo">
                            <h1>LEFT UP</h1>
                        </div>
                    </a>
                    <button class="navbar-toggler order-last btn-white border-white" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="bi bi-grid text-white"></i>
                    </button>


                    <div class="collapse navbar-collapse nav ms-lg-auto flex-grow-0 ms-3" id="navbarSupportedContent">
                        <a class="nav-link" href="{{ route('website.index') }}">Home</a>

                        <a class="nav-link active" aria-current="page" href="{{ route('website.langEn.myCar') }}">My cars</a>
                        <a class="nav-link pe-0" href="{{ route('website.langEn.myBooking') }}">My bookings</a>


                        <a class="" href="{{ route('website.langEn.myCar') }}">
                            <button class="btn border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <a href="" class="nav-link">More <i class="fa-solid fa-caret-down"></i></a> </button>
                             <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="#">Profile personly</a></li>
                                 <li><a class="dropdown-item" href="#">who are we</a></li>
                                 <li><a class="dropdown-item" href="#">Terms and Conditions</a></li>
                                 <li><a class="dropdown-item" href="#"> customer service</a>
                                <p class="ps-3">
                                    <a href="" class="me-4 icon">
                                        <img class="whats" src="{{ asset('website/assets/img/whatsapp.png') }}" alt="">
                                    </a>

                                   <a href="" class="me-4 icon">
                                    <img src="{{ asset('website/assets/img/inst.png') }}" alt="">

                                   </a>
                                   <a href="" class="me-4 icon">
                                    <img class="twit" src="{{ asset('website/assets/img/twit.png') }}" alt="">

                                   </a>

                                </p></li>
                                <li><a class="dropdown-item" href="#">Language</a>
                                    <p class="ps-3">
                                        <a href="" class="me-5 icon"> Ar
                                        </a>
                                        <a href="" class="me-4 icon"> En
                                        </a>



                                    </p></li>

                             </ul>
                             </a>

                    </div>
                    <!-- <div class=" nav end ms-lg-auto flex-grow-0 ms-2 ms-md-5" id="navbarSupportedContent">
                <a class="nav-link  " href="#"><i class="fa-regular fa-magnifying-glass search"></i></a>
                <a class="nav-link  " href="#"><i class="fa-regular fa-heart"></i></a>
                <a class="nav-link " href="#"><i class="fa-regular fa-cart-shopping"></i></a>
              </div> -->


                </div>

            </nav>
            <!-- End nav -->

            <!-- Start Hero -->
            <div class="hero">
                <div class="row row-cols-1 row-cols-md-2  ">
                    <div class="col header ">
                        <h1 class="mb-5">The oil pit .. <p class="">brings you home <i
                                    class="fa-solid fa-oil-can-drip ps-3 "></i></p>
                        </h1>
                        <a href="{{ route('website.langEn.myCar') }}" class="btn mt-5 mb-2 BtnMain bg-white">
                            <i class="fa-solid fa-oil-can-drip fs-3"></i> <br> Book an oil change
                        </a>
                    </div>


                    <div class="col circ d-none d-md-block">
                        <div class="big">
                            <div class="small text-center">
                                <img src="{{ asset('website/assets/img/LOGO_LEFT_UP-removebg-preview.png') }}"
                                    loading="lazy" alt="Logo">
                            </div>
                            <div class="text">
                                <p>rest ~ assured ~ quality ~ </p>
                            </div>


                        </div>
                    </div>

                </div>


            </div>
            <!-- End Hero -->
        </div>
    </main>







    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script>
        const text = document.querySelector('.text p');
        text.innerHTML = text.innerText.split("").map(
            // console.log("kkk");
            (char, i) =>
            `<span style="transform:rotate(${i * 14}deg)">${char}</span>`
        ).join("")
    </script>

</body>

</html>
