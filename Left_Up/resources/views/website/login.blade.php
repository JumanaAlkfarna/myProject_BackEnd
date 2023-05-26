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

    <section class="number">
        <div class="container-fluid px-5">
            <div class="row row-cols-1 row-cols-md-2 mt-md-5">
                <div class="col  logo pt-5 ps-md-5">
                    <div class="img  mt-md-5 ps-md-5">
                        <img src="{{ asset('website/assets/img/LOGO_LEFT_UP-removebg-preview.png') }}" loading="lazy" alt="Logo">
                        <a href="{{ route('view.login') }}"><h1>LEFT UP</h1></a>
                    </div>

                </div>
                <div class="col verification ">
                    <form >
                        <div class="loooog">
                            <h2 classs="">Login</h2>
                            <div class="">
                                <input type="email"  class="d-block mt-4" id="email" name="email" placeholder="Enter Email">

                            <div class="">
                                <input type="password"  class="d-block mt-4" id="password" name="password">
                            <div class=" ">
                                <div class="bt">
                                    <button type="button" onclick="login()" class="  mt-4 fs-5 ">Start</button>
                                 </div>
                            </div>

                            <div class="text-white text-center mt-4 ttext">
                                <span>You do not have an account?</span>
                                <a href="{{ route('website.register') }}" class="text-white ps-3">Register Now</a>
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
    <script src="{{ asset('website/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/main.js') }}"></script>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script>
        function login() {
            // var guard = '{{request('guard')}}';
            axios.post('/front/login', {
                email: document.getElementById('email').value,
              password: document.getElementById('password').value,
            //   remember_me: document.getElementById('remember').checked,
            //   guard: guard
            })
                .then(function (response) {
                window.location.href = '/front/user'
            })
                .catch(function (error) {
                    if (error.response.data.errors !== undefined) {
                      showErrorMessages(error.response.data.errors);
                    } else {
                        showMessage(error.response.data);
                    }
                });
          }
          </script>
</body>

</html>
