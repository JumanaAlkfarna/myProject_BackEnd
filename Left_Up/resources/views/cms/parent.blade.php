<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> CMSA | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/plugins/fontawesome-free-6.1.1/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('cms/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('cms/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap 4 RTL -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('cms/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 <!-- Library Fontawesme -->
 <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css" />

    <!-- Custom style for RTL -->
    <link rel="stylesheet" href="{{ asset('cms/dist/css/custom.css') }}">
    @yield('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">الرئيسية</a>
                </li>

            </ul>


            <!-- Right navbar links -->
            <ul class="navbar-nav mr-auto-navbav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{ asset('cms/dist/img/CMSA-LOGO.jpg') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">LEFT UP</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">

                        {{--  <img src="{{ asset('storage/images/admin/' . auth('admin')->user()->images) }}" class="img-circle elevation-2"  --}}
                        {{--  <img class="brand-image img-circle elevation-3" src="{{ asset('storage/images/admin/' . auth('admin')->user()->images) }}"  --}}
                        {{--  alt="User Image">  --}}
                    </div>
                    <div class="info">

                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item ">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    الرئيسية
                                </p>
                            </a>

                        </li>

                        <li class="nav-header">
                            التحكم
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users ml-2"></i>
                                <p>
                                    المسؤولين
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('admins.index') }}" class="nav-link">
                                        <i class="fas fa-desktop ml-2"></i>
                                        <p>عرض المسؤولين</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admins.create') }}" class="nav-link">
                                        <i class="fas fa-desktop ml-2"></i>
                                        <p>إنشاء مسؤول</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-header">
                            الموقع
                        </li>



                        <li class="nav-item has-treeview">
                            <a href="" class="nav-link">
                                <i class="fas fa-users ml-2"></i>
                                <p>
                                    المستخدمين
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link">
                                        <i class="fa-solid fa-display"></i>
                                        <p> عرض المستخدمين</p>
                                    </a>
                                </li>

                            </ul>
                        </li>



                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="ml-2 fa-solid fa-presentation-screen"></i>
                                <p>
                                    الحجوزات
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('bookings.index') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p>عرض الحجوزات</p>

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('index.Today') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p>عرض حجوزات اليوم</p>

                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-copyright  ml-2"></i>
                                <p>
                                    الماركات
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('brands.create') }}" class="nav-link">
                                        <i class="fa-solid fa-circle-plus"></i>
                                        <p> إضافة ماركة</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('brands.index') }}" class="nav-link">
                                        <i class="fa-sharp fa-solid fa-block-quote"></i>
                                        <p>عرض الماركات</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-square ml-2"></i>
                                <p>
                                    الموديلات
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('modeels.create') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p> إضافة موديل</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('modeels.index') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p>عرض الموديلات</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users ml-2"></i>
                                <p>
                                    السنوات
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('years.create') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p> إضافة سنة</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('years.index') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p>عرض السنوات</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users ml-2"></i>
                                <p>
                                    الاسطوانات
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('cylinders.create') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p> إضافة عدد اسطوانات</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('cylinders.index') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p>عرض الاسطوانات</p>
                                    </a>
                                </li>


                            </ul>
                        </li>


                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users ml-2"></i>
                                <p>
                                    السيارات
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('cars.create') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p> إضافة  سيارة</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('cars.index') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p>عرض السيارات</p>
                                    </a>
                                </li>


                            </ul>
                        </li>


                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users ml-2"></i>
                                <p>
                                    الزيوت
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('oils.create') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p> إضافة  زيت</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('oils.index') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p>عرض الزيوت</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users ml-2"></i>
                                <p>
                                    أسماء الفلاتر
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('filters.create') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p> إضافة  فلتر</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('filters.index') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p>عرض الفلاتر</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users ml-2"></i>
                                <p>
                                    أسعار الفلاتر
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('filterprices.create') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p> إضافة سعر فلتر</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('filters.index') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p>عرض أسعار الفلاتر للسيارات</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users ml-2"></i>
                                <p>
                                     أوقات العمل
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('times.create') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p> إضافة  وقت عمل</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('times.index') }}" class="nav-link">
                                        <i class="fas fa-edit"></i>
                                        <p>عرض أوقات العمل</p>
                                    </a>
                                </li>


                            </ul>
                        </li>



                       
                        <li class="nav-header">
                            الاعدادات
                        </li>

                        {{-- <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fas fa-edit"></i>
                                <p>تغيير كلمة المرور</p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('view.test') }}" class="nav-link">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                <p>تسجيل الخروج</p>
                            </a>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> @yield('page title')</h1>
                        </div><!-- /.col -->

                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-left">

                                <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                                <li class="breadcrumb-item active"> @yield('active title')</li>

                                <!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                @yield('content')

            </div>
        </div>


        <div>
            <footer class="main-footer ">
                <strong> جميع الحقوق محفوظة {{ now()->year }}-{{ now()->year + 1 }} &copy;<a
                        href="#">{{ env('APP_NAME') }}</a>.</strong>
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> {{ env('APP_VERSION') }}
                </div>
            </footer>
        </div>
        {{-- @endif --}}

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- ./wrapper -->

    </div>
    <!-- jQuery -->
    <script src="{{ asset('cms/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('cms/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 rtl -->
    <script src="{{ asset('cms/https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('cms/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('cms/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('cms/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('cms/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('cms/plugins/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('cms/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('cms/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('cms/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('cms/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('cms/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('cms/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('cms/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('cms/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('cms/dist/js/demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('cms/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('cms/js/crud.js') }}"></script>
    @yield('scripts')
</body>

</html>
