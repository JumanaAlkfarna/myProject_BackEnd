@extends('website.langEn.parent')

@section('title', 'my Car')


@section('styles')

@endsection

@section('content')
{{-- <a href="{{route('indexArticle',['id'=>$author->id])}}"
    class="btn btn-info">({{$author->articles_count}})
    article/s</a> --}}

    <section class="myCar my-4">
        <div class="container ">
            <div class="text-center please ">
                <a href="{{ route('website.langEn.carDetails') }}" class="d-flex align-contents-center">
                    <i class="fa-light fa-circle-plus"></i>
                    <p>Add a car to the garage</p>
                </a>
            </div>

            <div class="row row-cols-1 row-cols-md-3 mt-1 mx-auto gx-5 gy-5">

                @foreach ($bookings as $booking)
                <div class="col car">
                    <div class="row  ">
                        <div class="col-3 pt-4 mb-md-1 mb-4  mt-md-0">
                            <i class="fa-solid fa-car-rear"></i>
                        </div>
                        <div class="col-9">
                            <h5>
                                <span>{{ $booking->car->brand->nameEn }}</span>
                                <span>{{  $booking->car->year->year }}</span>
                            </h5>
                            <p>Next oil change date</p>

                            <a href="{{ route('website.langEn.myCarDetails',  $booking->car_id ) }}">
                            <button type="button" class="btn   BtnMain "> Book an oil change <i
                                    class="fa-solid fa-oil-can-drip "></i></button>
                            </a>
                            </div>
                    </div>
                </div>
                @endforeach


                {{-- <div class="col car">
                    <div class="row  ">
                        <div class="col-3 pt-4 mb-md-1 mb-4  mt-md-0">
                            <i class="fa-solid fa-car-rear"></i>
                        </div>
                        <div class="col-9">
                            <h5>
                                <span>Toyota Camry</span>
                                <span>2013</span>
                            </h5>
                            <p>Next oil change date</p>

                            <button type="button" class="btn   BtnMain "> Book an oil change <i
                                    class="fa-solid fa-oil-can-drip "></i></button>
                        </div>
                    </div>
                </div>

                <div class="col car">
                    <div class="row  ">
                        <div class="col-3 pt-4 mb-md-1 mb-4  mt-md-0">
                            <i class="fa-solid fa-car-rear"></i>
                        </div>
                        <div class="col-9">
                            <h5>
                                <span>Toyota Camry</span>
                                <span>2013</span>
                            </h5>
                            <p>Next oil change date</p>

                            <button type="button" class="btn   BtnMain "> Book an oil change <i
                                    class="fa-solid fa-oil-can-drip "></i></button>
                        </div>
                    </div>
                </div>


                <div class="col car">
                    <div class="row  ">
                        <div class="col-3 pt-4 mb-md-1 mb-4  mt-md-0">
                            <i class="fa-solid fa-car-rear"></i>
                        </div>
                        <div class="col-9">
                            <h5>
                                <span>Toyota Camry</span>
                                <span>2013</span>
                            </h5>
                            <p>Next oil change date</p>

                            <button type="button" class="btn   BtnMain "> Book an oil change <i
                                    class="fa-solid fa-oil-can-drip "></i></button>
                        </div>
                    </div>
                </div>

                <div class="col car">
                    <div class="row  ">
                        <div class="col-3 pt-4 mb-md-1 mb-4  mt-md-0">
                            <i class="fa-solid fa-car-rear"></i>
                        </div>
                        <div class="col-9">
                            <h5>
                                <span>Toyota Camry</span>
                                <span>2013</span>
                            </h5>
                            <p>Next oil change date</p>

                            <button type="button" class="btn   BtnMain "> Book an oil change <i
                                    class="fa-solid fa-oil-can-drip "></i></button>
                        </div>
                    </div>
                </div>

                <div class="col car">
                    <div class="row  ">
                        <div class="col-3 pt-4 mb-md-1 mb-4  mt-md-0">
                            <i class="fa-solid fa-car-rear"></i>
                        </div>
                        <div class="col-9">
                            <h5>
                                <span>Toyota Camry</span>
                                <span>2013</span>
                            </h5>
                            <p>Next oil change date</p>

                            <button type="button" class="btn   BtnMain "> Book an oil change <i
                                    class="fa-solid fa-oil-can-drip "></i></button>
                        </div>
                    </div>
                </div>


                <div class="col car">
                    <div class="row  ">
                        <div class="col-3 pt-4 mb-md-1 mb-4  mt-md-0">
                            <i class="fa-solid fa-car-rear"></i>
                        </div>
                        <div class="col-9">
                            <h5>
                                <span>Toyota Camry</span>
                                <span>2013</span>
                            </h5>
                            <p>Next oil change date</p>

                            <button type="button" class="btn   BtnMain "> Book an oil change <i
                                    class="fa-solid fa-oil-can-drip "></i></button>
                        </div>
                    </div>
                </div>

                <div class="col car">
                    <div class="row  ">
                        <div class="col-3 pt-4 mb-md-1 mb-4  mt-md-0">
                            <i class="fa-solid fa-car-rear"></i>
                        </div>
                        <div class="col-9">
                            <h5>
                                <span>Toyota Camry</span>
                                <span>2013</span>
                            </h5>
                            <p>Next oil change date</p>

                            <button type="button" class="btn   BtnMain "> Book an oil change <i
                                    class="fa-solid fa-oil-can-drip "></i></button>
                        </div>
                    </div>
                </div>

                <div class="col car">
                    <div class="row  ">
                        <div class="col-3 pt-4 mb-md-1 mb-4  mt-md-0">
                            <i class="fa-solid fa-car-rear"></i>
                        </div>
                        <div class="col-9">
                            <h5>
                                <span>Toyota Camry</span>
                                <span>2013</span>
                            </h5>
                            <p>Next oil change date</p>

                            <button type="button" class="btn   BtnMain "> Book an oil change <i
                                    class="fa-solid fa-oil-can-drip "></i></button>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>

@endsection

@section('scripts')

@endsection
