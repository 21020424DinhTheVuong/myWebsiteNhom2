<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head')
</head>


<body class="hold-transition sidebar-mini layout-fixed">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"> <i class="fas fa-bars"> QUẢN LÍ CỬA HÀNG</i> </a>
        </li>
    </ul>
</nav>
@yield('content2')
<div class="content-wrapper">
    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">

                    <div class="card card-primary mt-3">

                        <div class="card-header">
                           <img src="template/admin/dist/img/website.png" class="img-circle elevation-2" alt="User Image">
                            @yield('home')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.slideBar')
@include('admin.footer')
</body>
</html>
