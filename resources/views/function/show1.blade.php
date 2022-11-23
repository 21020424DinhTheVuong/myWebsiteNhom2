<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tìm kiếm hóa đơn</title>
    <link rel="stylesheet" href="{{asset('bootstrap-4.4.1/css/bootstrap.min.css')}}">
</head>
<body>
<div class="container">
    <div class ="row">
        <div class="col-md-6" style="margin-top:50px">
            <h1>Tìm kiếm hóa đơn bán hàng</h1><hr>
            <form action="{{route('show1')}}"method="GET">
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
            @if(isset($exportbills))

                <table border="1" class="table table-hover">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Nhân viên bán hàng</th>
                        <th>Khach mua</th>
                        <th>Ngày mua</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($exportbills) > 0)
                        @foreach($exportbills as $eb)
                            <th>{{$eb->id}}</th>
                            <th>{{$eb->epl_ID}}</th>
                            <th>{{$eb->Customer_ID}}</th>
                            <th>{{$eb->DateExport}}</th>
                            <tr></tr>
                        @endforeach
                    @else
                        <tr><td>No result found!</td></tr>
                    @endif
                    </tbody>
                </table>

                <div class="pagination-block">
                    {{$exportbills->links('admin.layouts.paginationlinks')}}
                </div>

            @endif
        </div>
    </div>
</div>
</body>
</html>
