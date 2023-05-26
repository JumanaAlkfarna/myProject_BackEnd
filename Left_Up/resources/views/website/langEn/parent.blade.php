<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEFT UP | @yield('title')</title>
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
   <style>
    .dropdown-menu[data-bs-popper] {
    top: 100%;
    right: 0 !important;
    left:80%;
    width:fit-content
    margin-top: var(--bs-dropdown-spacer);
    }
    a {
        text-decoration: none;
    }
    a.icon img {
        width: 28px;
        height: 28px;
    }
    a.icon img.whats {
        width: 40px;
        height: 40px;
    }
    a.icon img.twit {
        width: 50px;
        height: 50px;
    }
   </style>
    @yield('styles')
</head>

<body>

    {{-- <div class="page-loader js-page-loader fade-out" >
        <div></div>
      </div> --}}

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <a class="nav-link active" aria-current="page" href="{{ route('website.langEn.myCar') }}">My cars</a>
            <a class="nav-link pe-0 pb-3" href="{{ route('website.langEn.myBooking') }}">My bookings</a>
            <a class="nav-link pb-3" href="{{ route('website.langEn.myCar') }}">Book service</a>


            <a class="nav-link pb-3" href="{{ route('website.langEn.myCar') }}">
                More</a>

        </div>
    </div>

        <div class="MAIN  ">
            <!-- Start nav -->
            <nav class="navbar navbar-expand-lg py-3  px-sm-4" id="navbar-example2">
                <div class="container-fluid NavCon">
                    <a class="navbar-brand pe-5" href="{{ route('view.login') }}">
                        <div class="img  d-flex justify-contents-center align-items-center">
                            <img src="{{ asset('website/assets/img/LOGO_LEFT_UP-removebg-preview.png') }}" loading="lazy" alt="Logo">
                         <h3>LEFT UP</h3>
                        </div>
                    </a>
                    <button class="navbar-toggler order-last" type="button"
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




                </div>

            </nav>
            <!-- End nav -->
        </div>



        @yield('content')






    <script src="{{ asset('website/assets/js/main.js') }}"></script>
    <script src="{{ asset('website/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('website/assets/js/calen.js') }}"></script>
    <script src="{{ asset('website/assets/js/timmm.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('cms/js/crud.js')}}"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script>

// const carousels = document.querySelectorAll('.main-carousel');

// carousels.forEach(carousel => {
//     new Flickity(carousel, {
//         // options
//         cellAlign: 'right',
//         wrapAround: true,
//         freeScroll: true,
//         prevNextButtons: false,
//         autoPlay: true,
//     });
// });

        // let arrr = document.querySelectorAll('.main-carousel');

        // arrr.forEach(element => {
        //  element.flickity({
        //          // options
        //          cellAlign: 'right',
        //          wrapAround: true,
        //          freeScroll: true,
        //          prevNextButtons: false,
        //          autoPlay: true,
        //      });
        // });



         </script>

    @yield('scripts')

</body>

</html>
