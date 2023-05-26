@extends('website.langEn.parent')

@section('title', 'Title')


@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
        .sw {
            position: relative;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')

    <form method="POST" action="{{ route('storeBill') }}" enctype="multipart/form-data">
        @csrf


        <section>
            <div class="container-fluid text-center">
                <div class=" dd oty mt-2 ">
                    <label for=""> <span>QTY</span> <br>
                        <input hidden type="text" name="booking_id" value="{{ $booking_id }}">
                        <div class="input-group d-flex">
                            <button type="button" class="btn ">
                                <i class="fa-regular fa-plus"></i>
                            </button>
                            <input type="text" class="form-control"
                                aria-label="Text input with segmented dropdown button" name="QTY" value="1">


                            <button type="button" class="btn">
                                <i class="fa-regular fa-minus"></i>
                            </button>


                        </div>

                    </label>
                </div>
                <div class="five text-center pt-5">
                    <h4 class="pp mt-5 pt-2"><span>5 Thousand </span> <input type="checkbox" value="five_thousand"
                            name="five_thousand"  /></h4>

                    <div class="main-carousel  pt-3  mb-5 ">

                        @foreach ($oils as $oil)
                            <div class=" cell">
                                <input type="radio" id="{{ $oil->id }}" name="oil_id" value="{{ $oil->id }}">
                                <label for="{{ $oil->id }}">
                                    <div class="content mt-4 pt-2">
                                        <div class="box ">
                                            <img src="{{ asset('storage/images/oil/' . $oil->image) }}" alt="Oil_five">
                                        </div>
                                        <span class="title">
                                            {{ $oil->nameEn }}
                                            <p class="price">{{ $oil->price }} SAR</p>
                                        </span>

                                    </div>
                                </label><br>


                            </div>
                        @endforeach



                        {{-- <div class=" cell">
                            <input type="radio" id="css" name="fav_language" value="CSS">
                            <label for="css">
                                <div class="content mt-4 pt-2">
                                    <div class="box ">
                                        <img src="./assets/LOGO_LEFT_UP-removebg-preview.png" alt="">
                                    </div>
                                    <span class="title">
                                        Lorem, ipsum dolor.
                                        <p class="price">24 SAR</p>
                                    </span>

                                </div>
                            </label><br>


                        </div> --}}

                    </div>

                </div>

                <div class="ten text-center pt-1">
                    <h4 class="pp mt-5"><span classs="ps-2">10 Thousand</span> <input type="checkbox" value="ten_thousand" name="ten_thousand"  /></h4>
                    <div class="main-carousel  pt-3  mb-5  ">

                        @foreach ($oilTens as $oil)
                            <div class=" cell">
                                <input type="radio" id="{{ $oil->id + 100 }}" name="oil_id1" value="{{ $oil->id + 100 }}">
                                <label for="{{ $oil->id + 100 }}">
                                    <div class="content mt-4 pt-2">
                                        <div class="box ">
                                            <img src="{{ asset('storage/images/oil/' . $oil->image) }}" alt="Oil_five">
                                        </div>
                                        <span class="title">
                                            {{ $oil->nameEn }}
                                            <p class="price">{{ $oil->price }} SAR</p>
                                        </span>

                                    </div>
                                </label><br>


                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>

        <section class="services  text-center pt-3 pb-5 mb-3 px-5 ">
            <h2>Services</h2>
            <div class="main-carousel  pt-3  pb-3">

                @foreach ($filterprices as $filterprice)
                    <div class="form-check cell">
                        <label for="" class="ll">
                            <input type="checkbox" class="radio" value="{{ $filterprice->filter->id }}"
                                name="filterprice[]" />
                            <span class="checkmark"></span>
                            <div class="content mt-3">
                                <div class="box ">
                                    <img src="{{ asset('storage/images/filter/' . $filterprice->filter->image) }}"
                                        alt="filter_Image">
                                </div>
                                <span class="title">
                                    {{ $filterprice->filter->nameEn }}
                                    <p class="price">{{ $filterprice->price }} SAR</p>
                                </span>

                            </div>


                        </label>
                    </div>
                @endforeach

                {{-- <div class="form-check cell">
                    <label for="" class="ll">
                        <input type="checkbox" class="radio" value="1" name="fooby[1][]" />
                        <span class="checkmark"></span>
                        <div class="content">
                            <div class="box ">
                                <img src="./assets/LOGO_LEFT_UP-removebg-preview.png" alt="">
                            </div>
                            <span class="title">
                                Lorem, ipsum dolor.
                                <p class="price">24 SAR</p>
                            </span>

                        </div>

                    </label>
                </div>

            --}}

            </div>

        </section>

        <section class="text-center   foot bg-info">
            <div class="cont">
              
                <button class="btn">Confirmation <i class="fa-regular fa-arrow-right-long"></i></button>
            </div>
        </section>

    </form>

@endsection

@section('scripts')
    <script>
        $('.main-carousel').flickity({
            // options
            cellAlign: 'right',
            wrapAround: true,
            freeScroll: true,
            prevNextButtons: false,

            autoPlay: true,
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endsection
