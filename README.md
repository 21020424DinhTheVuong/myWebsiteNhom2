# Project: CHƯƠNG TRÌNH HỆ THỐNG QUẢN LÍ CỬA HÀNG ĐIỆN THOẠI



**Chương trình Hệ thống Quản lí cửa hàng điện thoại** là một chương trình được xây dựng từ ngôn ngữ lập trình PHP, CSS, Bootstrap, JavaScript và Laravel Framework dựa theo mô hình kiến trúc MVC (Model-View-Controller). Những người sử dụng chương trình được chia ra với các vai trò chính là quản lí của cửa hàng (Administrator) và nhân viên làm việc (Employees). Với các chức năng  được lập trình để quản lí, Administrator có thể nhập sản phẩm vào kho cửa hàng, tìm kiếm và hiển thị sản phẩm theo kết quả tìm kiếm, thêm nhân viên và giám sát các giao dịch mua bán trong cửa hàng.



## Tài nguyên lập trình



- ### Laravel Framework:

Laravel Framework là một tập hợp các class giúp các nhà phát triển làm việc được dễ dàng hơn. Ví dụ điển hình là khi nhà phát triển chọn ẩn một số Hypertext Transfer Protocol(HTTP) phức tạp hoặc thêm các chức năng thiết yếu.

Laravel là một trong những PHP Web Framework phổ biến nhất theo mẫu MVC (Model-View- Controller). Được tạo bởi Taylor Otwell, Laravel framework là nguồn mở và miễn phí giúp bạn đưa ra các sản phẩm chất lượng cao. Các code sẽ được giảm thiểu đi, nhưng vẫn đạt tiêu chuẩn ngành, giúp bạn tiết kiệm được hàng trăm giờ đồng hồ dành cho việc phát triển.

Laravel đã trở nên khá thông dụng và có sẵn miễn phí. Laravel web development rất hữu ích trong việc tạo ra phần mềm web được cá nhân hóa một cách nhanh chóng và hiệu quả.



 - ### PHP 

PHP (viết tắt đệ quy của PHP: Hypertext Preprocessor) là tập hợp con của các ngôn ngữ script như JavaScript và Python. Sự khác biệt là ngôn ngữ PHP chủ yếu được sử dụng để giao tiếp phía server trong khi JavaScript có thể được sử dụng cho cả frontend cũng như backend và Python – chỉ dành cho phía client (backend).

PHP được coi là ngôn ngữ lập trình "cốt lõi" để tạo nên toàn bộ chương trình.



- ### CSS, Bootstrap, JavaScript

Đây là 3 ngôn ngữ lập trình chính để tạo nên sự sinh động cho toàn giao diện trang web. Với tính linh hoạt kết hợp các style trong CSS, các mẫu thiết kế sẵn được đông đảo cộng đồng Bootstrap đóng góp và vô vàn hình ảnh động được tạo từ JavaScript đã tạo nên bộ ba hoàn hảo, hỗ trợ các lập trình viên code Front-end. Sự tương thích với Laravel Framework càng góp phần tạo nên sự hoàn hảo cho những nhà lập trình web.



- ### XAMPP VÀ CƠ SỞ DỮ LIỆU(Database)

**XAMPP** là một phần mềm cho phép giả lập môi trường server hosting ngay trên máy tính của bạn, cho phép bạn chạy demo website mà không cần phải mua hosting hay VPS. Chính vì vậy, XAMPP hay được phục vụ cho hoạt động học tập giảng dạy thực hành và phát triển web.

Đây là phần mềm chính để duy trì và quản lí cơ sở dữ liệu của dự án.



## MÔ TẢ CHI TIẾT VỀ CHƯƠNG TRÌNH

| Danh mục                             |               Nội dung               |
| :----------------------------------- | :----------------------------------: |
| **Tên dự án:**                       | Hệ thống quản lí cửa hàng điện thoại |
| **Nền tảng:**                        |                 PHP                  |
| **Ngôn ngữ lập trình được sử dụng:** | Laravel, CSS, Bootstrap, JavaScript  |
| **Lập trình viên:**                  |              Nhóm số 2               |
| **IDE:**                             |               PhpStorm               |
| **Phân loại**:                       |             Ứng dụng Web             |
| **Cơ sở dữ liệu**:                   |                MySQL                 |



#### CƠ SỞ DỮ LIỆU(DATABBASE): mobliestoredb

![mobilestoredb](https://user-images.githubusercontent.com/67379909/208251487-a03f0fdc-fa46-4c86-98ca-c3e6334bf124.png)



Cơ sở dữ liệu được xây dựa trên mô hình thực thể (Entity Relationship model - E-R). 

Các khoá chính và khoá ngoại được tạo trong CSDL được thiết kế logic sao cho các quan hệ có tính liên kết giữa hai hay nhiều tập thực thể.



#### CHỨC NĂNG CHÍNH CỦA CHƯƠNG TRÌNH: VỚI VAI TRÒ LÀ ADMINISTRATOR 

- **HỆ THỐNG ĐĂNG NHẬP**

![Hethongdangnhap](https://user-images.githubusercontent.com/67379909/208251485-5b46a4d1-87bf-44a5-bd6b-0ecc63a42b84.png)

Khi được chia vai trò sử dụng, mỗi người sử dụng sẽ được cấp 1 tài khoản có mã hoá mật khẩu theo hàm băm (hash) và được lưu trữ lại trong bảng *users* trong CSDL.

Đồng thời, với Laravel nhóm đã thiết kế Middleware như một cánh cổng giúp sàng lọc được những request tiềm ẩn xấu như tấn công mạng hoặc lỗi trong phân quyền các user.



- **TRANG CHỦ**

![home](https://user-images.githubusercontent.com/67379909/208251486-3bdf15e3-cf9b-4e68-a7e7-edf75eb612d6.png)

Khi login tài khoản Admin, người dùng sẽ có các chức năng được cung cấp để quản lí cửa hàng như:

1. Nhập sản phẩm vào kho
2. Tìm kiếm sản phẩm
3. Thêm nhân viên
4. Quản lí nhập hàng
5. Quản lí bán hàng



> ### Clip demo sản phẩm:  [Youtube](https://www.youtube.com/watch?v=8aoUiAmt_EI)



Với mô hình web server-client, các dữ liệu được nhập khi input bằng bàn phím được xử lí thông qua các câu lệnh PHP để insert vào trong bảng tương ứng với từng loại dữ liệu, từng loại đối tượng. Các vấn đề xảy ra với khoá chính khoá ngoại cũng được xử lí mượt mà bằng Laravel.

```php
public function insertEmployee(Request $request){
    $EMPLOYEE = new employee;
    $EMPLOYEE->epl_birthDate = $request->birthDate;
    $EMPLOYEE->sex = $request->sex;
    $EMPLOYEE->jobTitle = $request->jobTitle;
    $EMPLOYEE->phone = $request->phone;
    $EMPLOYEE->address = $request->address;
    $EMPLOYEE->save();
    return redirect()->back()->with('thong bao', 'Thêm nhân viên thành công');
}
```



Công cụ tìm kiếm sản phẩm, người dùng có thể tìm kiếm sản phẩm trong kho thông qua tên sản phẩm, phân loại, màu sắc, nhà cung cấp. Chức năng này được thiết kế dựa trên những lí thuyết về câu lệnh truy vấn MySQL, vì vậy khi kết hợp các câu lệnh truy vấn với nhau đã tạo nên các bộ lọc hợp lí dễ dàng hơn quản lí sản phẩm.

```php
function search(Request $request){
    if(isset($_GET['query'])){
        $search_text = $_GET['query'];
        $mobiles = DB::table('mobiles')->where('productName', 'LIKE', '%' . $search_text . '%')
            ->paginate(5);
        $mobiles->appends($request->all());
        return view('function.search',['mobiles'=>$mobiles]);
    }else {
        $mobiles = DB::table('mobiles')->paginate(5);
        return view('function.search',['mobiles'=>$mobiles]);
    }
```



## HƯỚNG DẪN CÀI ĐẶT

**Bước 1:** Cài đặt thư viện [Composer and the Laravel](https://getcomposer.org/download/) 

![step1](https://user-images.githubusercontent.com/67379909/208251488-ac41cf2d-c7c1-4393-80d1-507247615db9.png)



**Bước 2:** Tải dự án ở github và giải nén:

![step2](https://user-images.githubusercontent.com/67379909/208251490-3c75b3c9-9bd8-43d6-8da3-9e793dac5b36.png)

- Sau khi giải nén myWebsiteNhom2, vào trong thư mục. Mở Command Prompt với root là tại folder myWebsiteNhom2. 

- Giải nén file: EXTRACT_THIS.zip![step2_1](https://user-images.githubusercontent.com/67379909/208251482-6782d5ae-0cb1-49b8-822e-492567093d7a.png)



**Bước 3:** Khởi động Apache và MySQL bằng XAMPP

![Xampp](https://user-images.githubusercontent.com/67379909/208272180-8b72cbb5-b7a0-4e0d-ada3-98848b4f4d71.png)



**Bước 4:** Tại Command Prompt, chạy lần lượt các lệnh:

> - composer update![3.1](https://user-images.githubusercontent.com/67379909/208251484-0b576c72-1eab-43da-b204-61dacc1e63c3.png)	Lệnh này giúp update các thư viện

> - php artisan key:generate
>
> ![key](https://user-images.githubusercontent.com/67379909/208272040-f67765fc-835c-4f12-ac86-46cfd6ac01c1.png)
>
> ​	Tạo khoá bảo mật của dự án

>- php artisan migrate
>
>![migrate](https://user-images.githubusercontent.com/67379909/208272041-7360d020-8200-43a4-8c22-2eda04907e49.png)
>
>​	Lệnh này yêu cầu Laravel tạo cơ sở dữ liệu được lập trình tự động

> - php artisan serve
>
> ![serve](https://user-images.githubusercontent.com/67379909/208272042-8ea28773-596d-4bb8-8dd7-ade147725f70.png)
>
> ​	Chạy chương trình
>
> ​	Truy cập "http://127.0.0.1:8000/" để tới trang web của chương trình.



## LỜI CẢM ƠN



Chúng em xin gửi lời cảm ơn chân thành và sâu sắc nhất tới các thầy cô phụ trách giảng dạy bộ môn Cơ Sở Dữ Liệu của trường Đại Học Công Nghệ - ĐHQGHN:

- **Thầy Lê Hồng Hải**
- **Cô Lê Thị Phương**

đã hỗ trợ, giúp chúng em hoàn thành bài tập lớn này.
