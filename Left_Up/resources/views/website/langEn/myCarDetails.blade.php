@extends('website.langEn.parent')

@section('title', 'Car Details')


@section('styles')
    <style>
        .mm {
            margin: auto;
        }

        .col-md-6 {
            margin: auto;
        }
    </style>
@endsection

@section('content')
    <div class="bt  ">
        {{-- <a href="{{ route('website.calender') }}">
    <button class="btn me-3 savebtn" type="button">
        Add a car
    </button>
</a> --}}
        <a href="{{ route('website.langEn.myCar') }}" class="">
            <i class="fa-regular fa-chevron-left"></i>
        </a>
    </div>

    <form method="POST" action="{{ route('book_store_next') }}" enctype="multipart/form-data">
        @csrf
        <div class="en">
            <h2 class="text-center mb-2 mt-2 add display-6">Book the next appointment</h2>
        </div>
        <ul class="nav nav-pills mt-3 " id="pills-tab" role="tablist">

            <li class="nav-item ms-4" role="presentation">
                <button class="pp active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Date
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="pp ms-4" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-ll"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Time
                </button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="pp ms-4" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-ff"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    Location</button>
            </li>



        </ul>
        <div class="  tab-content  " id="pills-tabContent">

            <div class="tab-pane  fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">

                <div class="container calen pt-5  ">
                    <div class="row ">
                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <label for="date">Choose a Date:</label>
                                <input class="form-control dateBooking" type="date" name="date" id="date"
                                    value="">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                  <div class="col-md-12">
                    <div id="calendar"></div>
                  </div>
                </div> --}}
                </div>



            </div>

            <div class="tab-pane fade" id="pills-ll" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <section class="time">
                    <div class="container-fluid text-center mx-auto">
                        <h2 class="mt-5 text-center">choose service time</h2>
                        <div class="row">



                        </div>
                        <div class=" cars    mx-auto">
                            <input hidden type="text" value="" class="form-control time_id " name="time_id"
                                id="time_id" placeholder="">

                            @foreach ($times as $time)
                                <div class="form-group col-md-6 d-none">
                                </div>

                                <div class=" car time mt-2">
                                    <div class="row  ">
                                        <div class="col-2 mb-md-1  mt-md-0">
                                            <i class="fa-solid fa-clock"></i>
                                        </div>
                                        <input type="text" hidden name="car_id" value="{{ $car_id }}">
                                        <div class="col-10 ">
                                            <h5>
                                                <span class="avaTime">{{ $time->available_time }}</span>
                                                <span class="per">{{ $time->periodEn }}</span>
                                                {{-- @php
                                                    $times = count(
                                                        App\Models\Booking::where('time_id', $time->id)
                                                            ->where('date', $date1)
                                                            ->get(),
                                                    );

                                                     dd($times);

                                                @endphp --}}

                                                {{-- <span>Full</span> --}}

                                                {{-- @else --}}
                                                <button type="button" value="{{ $time->id }}"
                                                    class="btn  me-auto BtnMain cooenf  "> Book Now <i
                                                        class="fa-solid fa-oil-can-drip "></i></button>
                                                {{-- </a> --}}

                                                {{-- @endif --}}
                                            </h5>


                                        </div>
                                    </div>
                                </div>
                            @endforeach







    </form>


    </div>
    </div>
    </section>

    </div>

    <div class="tab-pane fade" id="pills-ff" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">


        <div class="">
            <div class="col-md-6 ">
                <div class="form-group">
                    <label for="projectinput1"> address </label>
                    <input type="text" id="pac-input" class="form-control" placeholder="  " name="address">

                    @error('address')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div id="map" style="height: 400px;width: 100%; " class="mm"></div>




            <div class="card-footer foot text-center">
                {{-- <a href="{{ route('website.langEn.oil') }}"> --}}
                <button type="submit" onclick="" class="btn btn-primary">confirmation <i
                        class="fa-solid fa-arrow-right-long"></i></button>
                {{-- <a href="{{ route('locations.index') }}" type="button" class="btn btn-info">Return Back</a> --}}
                {{-- </a> --}}
            </div>
        </div>




    </div>
    <div class="d-none">
        <input type="text" value="wait" class="form-control  " name="status" id="status" placeholder="">

    </div>

    </form>





@endsection

@section('scripts')


    <script>
        $("#pac-input").focusin(function() {
            $(this).val('');
        });
        $('#latitude').val('');
        $('#longitude').val('');
        // This example adds a search box to a map, using the Google Place Autocomplete
        // feature. People can enter geographical searches. The search box will return a
        // pick list containing a mix of places and predicted search terms.
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 24.740691,
                    lng: 46.6528521
                },
                zoom: 13,
                mapTypeId: 'roadmap'
            });
            // move pin and current location
            infoWindow = new google.maps.InfoWindow;
            geocoder = new google.maps.Geocoder();
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    map.setCenter(pos);
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(pos),
                        map: map,
                        title: 'موقعك الحالي'
                    });
                    markers.push(marker);
                    marker.addListener('click', function() {
                        geocodeLatLng(geocoder, map, infoWindow, marker);
                    });
                    // to get current position address on load
                    google.maps.event.trigger(marker, 'click');
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                console.log('dsdsdsdsddsd');
                handleLocationError(false, infoWindow, map.getCenter());
            }
            var geocoder = new google.maps.Geocoder();
            google.maps.event.addListener(map, 'click', function(event) {
                SelectedLatLng = event.latLng;
                geocoder.geocode({
                    'latLng': event.latLng
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            deleteMarkers();
                            addMarkerRunTime(event.latLng);
                            SelectedLocation = results[0].formatted_address;
                            console.log(results[0].formatted_address);
                            splitLatLng(String(event.latLng));
                            $("#pac-input").val(results[0].formatted_address);
                        }
                    }
                });
            });

            function geocodeLatLng(geocoder, map, infowindow, markerCurrent) {
                var latlng = {
                    lat: markerCurrent.position.lat(),
                    lng: markerCurrent.position.lng()
                };
                /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/
                $('#latitude').val(markerCurrent.position.lat());
                $('#longitude').val(markerCurrent.position.lng());
                geocoder.geocode({
                    'location': latlng
                }, function(results, status) {
                    if (status === 'OK') {
                        if (results[0]) {
                            map.setZoom(8);
                            var marker = new google.maps.Marker({
                                position: latlng,
                                map: map
                            });
                            markers.push(marker);
                            infowindow.setContent(results[0].formatted_address);
                            SelectedLocation = results[0].formatted_address;
                            $("#pac-input").val(results[0].formatted_address);
                            infowindow.open(map, marker);
                        } else {
                            window.alert('No results found');
                        }
                    } else {
                        window.alert('Geocoder failed due to: ' + status);
                    }
                });
                SelectedLatLng = (markerCurrent.position.lat(), markerCurrent.position.lng());
            }

            function addMarkerRunTime(location) {
                var marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                markers.push(marker);
            }

            function setMapOnAll(map) {
                for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(map);
                }
            }

            function clearMarkers() {
                setMapOnAll(null);
            }

            function deleteMarkers() {
                clearMarkers();
                markers = [];
            }
            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            $("#pac-input").val("أبحث هنا ");
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });
            var markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();
                if (places.length == 0) {
                    return;
                }
                // Clear out the old markers.
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(100, 100),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };
                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                        map: map,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));
                    $('#latitude').val(place.geometry.location.lat());
                    $('#longitude').val(place.geometry.location.lng());
                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }

        function splitLatLng(latLng) {
            var newString = latLng.substring(0, latLng.length - 1);
            var newString2 = newString.substring(1);
            var trainindIdArray = newString2.split(',');
            var lat = trainindIdArray[0];
            var Lng = trainindIdArray[1];
            $("#latitude").val(lat);
            $("#longitude").val(Lng);
        }
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKZAuxH9xTzD2DLY2nKSPKrgRi2_y0ejs&libraries=places&callback=initAutocomplete&language=ar&region=EGasyncdefer">
    </script>
    {{-- <script src="{{ asset('cms/dist/js/crud.js') }}"></script> --}}

    <script>
        function performStore() {

            let formData = new FormData();
            // formData.append('brand', document.getElementById('brand').value);
            // formData.append('modeel', document.getElementById('modeel').value);
            // formData.append('year', document.getElementById('year').value);
            // formData.append('cylinder', document.getElementById('cylinder').value);

            formData.append('time_id', document.getElementById('time_id').value);
            formData.append('locationEn', document.getElementById('pac-input').value);
            formData.append('date', document.getElementById('date').value);
            // formData.append('user_id', document.getElementById('user_id').value);
            // formData.append('car_id', document.getElementById('car_id').value);
            formData.append('status', document.getElementById('status').value);

            store('/front/user/bookings', formData);
        }
    </script>
    <script>

        var date1 = document.getElementById('date').value;

    </script>

@endsection
