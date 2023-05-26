@extends('website.langEn.parent')

@section('title', 'Title')


@section('styles')

@endsection

@section('content')


    <section class="product ">
        <div class="container-fluid text-center py-4">
            <div class="kha mb-4">
                <div class="en">
                    <h2 class="text-center mb-2 add display-6 mt-2">my Bill</h2>
                </div>
                {{-- <input type="text" class=""> --}}
                {{-- <button class="px-2  coupon">coupon</button> --}}

            </div>
            <!-- <p >Total : <span>234</span> SAR </p> -->
            <div class=" tt ">
                <table class="table mx-auto ">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{ $bill->oil->nameEn }}</td>
                            <td>{{ $bill->oil->price }} × {{ $bill->QTY }}</td>
                        </tr>
                        @php
                           //dd( $filtterIds);
                        @endphp
                        @foreach($bill->filterprices as $billfilterprice)
                        <tr class="filters">
                            <td>{{ $billfilterprice->filter->nameEn }}</td>
                            <td>{{ $billfilterprice->price }}</td>
                        </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>

            <div class="Ttotal mt-2">
                @php

                @endphp
                <p class="total"> Total : <span class="total">{{ ($bill->oil->price * $bill->QTY) + $bill->filterprices->sum('price') }}</span> <span>SAR</span></p>
            </div>



            <div class="ret">
                <a href="{{ route('website.langEn.myBooking') }}" class="btn retu">Return to my Booking</a>
            </div>



        </div>
    </section>


@endsection

@section('scripts')

@endsection
