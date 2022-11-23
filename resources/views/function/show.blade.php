<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tìm kiếm hóa đơn nhập hàng</title>
    <link rel="stylesheet" href="{{asset('bootstrap-4.4.1/css/bootstrap.min.css')}}">
</head>
<body>
<div class="container">
    <div class ="row">
        <div class="col-md-6" style="margin-top:50px">
            <h1>Tìm kiếm hóa đơn nhập hàng</h1><hr>
            <form action="{{route('show')}}"method="GET">
                <div class="form-group">
                    <label for="">Nhập ngày cần tìm</label>
                    <input type="text" class="form-control" name="query" placeholder="Bạn muốn tìm gì?">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Tìm</button>
                </div>
                <a href="../main">
                    <b class="btn btn-primary">Quay về trang chủ</b>
                </a>
            </form>
            <br>
            <br>
            <hr>
            <br>
            @if(isset($import_bills) || isset($provides))
                <table border="1" class="table table-hover">
                    <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Màu</th>
                        <th>Số lượng</th>
                        <th>Ngày nhập</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($import_bills) > 0)
                        @foreach($import_bills as $ib)
                            <th>{{$ib->Mobile_ID}}</th>
                            <th>{{$ib->color}}</th>
                            <th>{{$ib->quantity}}</th>
                            <th>{{$ib->created_at}}</th>
                            <tr></tr>
                        @endforeach
                    @else
                        <tr><td>No result found!</td></tr>
                    @endif
                    </tbody>
                </table>

                <div class="pagination-block">
                    {{$import_bills->links('admin.layouts.paginationlinks')}}
                </div>


            @endif
        </div>
    </div>
</div>
</body>
</html>
