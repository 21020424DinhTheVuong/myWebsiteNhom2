@extends('function.layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm nhân viên </h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{!! route('nhapNhanvien') !!}" >
                    @if(Session::has('thong bao'))
                        <div class="alert alert-success"> {{Session::get('thong bao')}}</div>
                    @endif
                    @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <strong> Ngày sinh  </strong>
                                <input type="date" name="birthDate" class="form-control" placeholder="Nhập ngày sinh">
                            </div>

                            <div class="form-group">
                                <strong> Giới tính  </strong>
                                <input type="text" name="sex" class="form-control" placeholder="Nhập giới tính">
                            </div>

                            <div class="form-group">
                                <strong> Chức vụ  </strong>
                                <input type="text" name="jobTitle" class="form-control" placeholder="Nhập chức vụ">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Phone</strong>
                                <input type="integer" name="phone" class="form-control" placeholder="Nhập SĐT">
                            </div>

                            <div class="form-group">
                                <strong>CMND/CCCD</strong>
                                <input type="text" name="identity" class="form-control" placeholder="Ngày CMND/CCCD">
                            </div>

                            <div class="form-group">
                                <strong>Địa chỉ</strong>
                                <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ">
                            </div>

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

