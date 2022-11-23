<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tìm kiếm sản phẩm</title>
    <link rel="stylesheet" href="{{asset('bootstrap-4.4.1/css/bootstrap.min.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6" style="margin-top:50px">
            <h1>Tìm kiếm sản phẩm</h1>
            <hr>
            <form action="{{route('f.search')}}" method="GET">
                <div class="form-group">
                    <label for="">Nhập từ khoá tại đây</label>
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
            @if(isset($mobiles))
                @if(count($mobiles) > 0)
                    <table border="1" class="table table-hover">
                        <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Màu</th>
                            <th>Số lượng</th>
                            <th>Giá nhập</th>
                            <th>Ngày tạo</th>
                            <th>Ngày cập nhật</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mobiles as $mb)
                            <td>{{ $mb->productName }}</td>
                            <td>{{ $mb->color }}</td>
                            <td>{{ $mb->quantity }}</td>
                            <td>{{ $mb-> priceImport }}</td>
                            <td>{{ $mb-> created_at}}</td>
                            <td>{{ $mb-> updated_at }}</td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <td>No result found!</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>

                    <div class="pagination-block">
                        {{$mobiles->links('admin.layouts.paginationlinks')}}
                    </div>

                @endif
        </div>
    </div>
</div>
</body>
</html>
