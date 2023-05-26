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
    <link rel="stylesheet" href="{{ asset('website/assets/css/login.css') }}">
    <!-- Flickity -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>
    <section class="register ver">
        <div class="container-fluid px-5">
            <div class="row row-cols-1 row-cols-md-2 mt-md-5">
                <div class="col  logo pt-3 ps-md-5">
                    <div class="img  mt-md-5 ps-md-5">
                        <img src="{{ asset('website/assets/img/LOGO_LEFT_UP-removebg-preview.png') }}" loading="lazy" alt="Logo">
                        <a href="{{ route('view.login') }}"><h1>LEFT UP</h1></a>
                    </div>

                </div>
                <div class="col verification ">
                    <form>
                        <div class="loooog regis">
                            <h2 classs="">Sign Up</h2>
                            <div class="">
                                <input type="text" required class="d-block mt-3" id="first_name" name="first_name"
                                 placeholder="Enter First Name">
                            </div>
                            <div class="">
                                <input type="text" required class="d-block mt-3" id="last_name" name="last_name"
                                placeholder="Enter Last Name">
                            </div>
                            <div class="">
                                <input type="tel" required class="d-block mt-3" id="mobile" name="mobile"
                                 placeholder="Enter Mobile">
                            </div>
                            <div class="">
                                <input type="email" required class="d-block mt-4" id="email" name="email" placeholder="Enter Email">
                            </div>
                            <div class="">
                                <input type="password" required class="d-block mt-3" id="password" name="password"
                            placeholder="Enter Password">
                            </div>
                            <div class=" ">
                                <div class="bt">
                                    <button class="mt-4 fs-5" type="button" onclick="performStore()">Start</button>
                                </div>
                            </div>

                            <div class="text-white text-center mt-4 ttext">
                                <span>You have an account?</span>
                                <a href="{{ route('viewUser.login') }}" class="text-white ps-3">login</a>
                            </div>
                        </div>










                </div>

                </form>
            </div>
        </div>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('cms/js/crud.js')}}"></script>

    <script>
        function performStore(){
        let formData = new FormData();
        formData.append('first_name',document.getElementById('first_name').value);
        formData.append('last_name',document.getElementById('last_name').value);
        // formData.append('first_nameAr',document.getElementById('first_nameAr').value);
        // formData.append('last_nameAr',document.getElementById('last_nameAr').value);
        formData.append('mobile',document.getElementById('mobile').value);
        formData.append('email',document.getElementById('email').value);
        formData.append('password',document.getElementById('password').value);
        store('/front/users' , formData)
      }

    </script>

</body>

</html>
