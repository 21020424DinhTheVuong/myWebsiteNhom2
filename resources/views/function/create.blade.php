@extends('function.layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm sản phẩm </h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{!! route('nhap') !!}" >
                    @if(Session::has('thong bao'))
                        <div class="alert alert-success"> {{Session::get('thong bao')}}</div>
                    @endif
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
                    <a href="../main">
                        <b class="btn btn-success mt-2">Quay về trang chủ</b>
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection

