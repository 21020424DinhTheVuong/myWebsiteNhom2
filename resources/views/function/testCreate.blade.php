<!DOCTYPE html>
<html lang="en">
<head>
    @include('function.head2')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
@include('function.head2')
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"> <i class="fas fa-bars"> QUẢN LÍ CỬA HÀNG</i> </a>
        </li>
    </ul>
</nav>

<div class="content-wrapper">

    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">

                    <div class="card card-primary">

                        <div class="card-header">

                            {{--<img src="template/admin/dist/img/website.png" class="img-circle elevation-2" alt="User Image">--}}
                            <form method="POST" action=" " >
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <strong>ID nhà cung cấp   </strong>
                                            <input type="text" name="provideID" class="form-control" placeholder="Nhập ID nhà cung cấp">
                                        </div>

                                        <div class="form-group">
                                            <strong>  Địa chỉ nha cung cấp  </strong>
                                            <input type="text" name="address" class="form-control" placeholder="Nhập đia chỉ nhà cung cấp">
                                        </div>

                                        <div class="form-group">
                                            <strong> Phone nha cung cấp   </strong>
                                            <input type="text" name="phone" class="form-control" placeholder="Nhập sdt nhà cung cấp">
                                        </div>


                                        <div class="form-group">
                                            <strong> email </strong>
                                            <input type="email" name="email" class="form-control" placeholder="Nhập email nhà cung cấp">
                                        </div>



                                        <div class="form-group">
                                            <strong>ID sản phẩm </strong>
                                            <input type="text" name="id" class="form-control" placeholder="Nhập ID sản phẩm">
                                        </div>

                                        <div class="form-group">
                                            <strong>Tên sản phẩm</strong>
                                            <input type="text" name="productName" class="form-control" placeholder="Nhập tên sản phẩm">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>Màu</strong>
                                            <input type="text" name="color" class="form-control" placeholder="Nhập màu sản phẩm">
                                        </div>

                                        <div class="form-group">
                                            <strong>Ngày nhập hàng </strong>
                                            <input type="date" name="dateImport" class="form-control" placeholder="Ngày nhập hàng">
                                        </div>
                                        <div class="form-group">
                                            <strong>Số lượng</strong>
                                            <input type="quantity" name="quantity" class="form-control" placeholder="Nhập số lượng">
                                        </div>
                                        <div class="form-group">
                                            <strong>Giá nhập</strong>
                                            <input type="integer" name="priceImport" class="form-control" placeholder="Giá nhập">
                                        </div>

                                        <div class="form-group">
                                            <strong> Ngày hết hạn</strong>
                                            <input type="date" name="dateDie" class="form-control" placeholder="Ngày hết hạn">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success mt-2">Lưu</button>
                            </form>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('function.footer2')
</body>
</html>
