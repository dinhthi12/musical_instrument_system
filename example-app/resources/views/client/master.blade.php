<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- Thiết lập thuộc tính ngôn ngữ .
         Phần {{ str_replace('_', '-', app()->getLocale()) }} đặt ngôn ngữ dựa trên ngôn ngữ của ứng dụng Laravel. --}}

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    {{-- Chỉ định bộ mã ký tự của tài liệu là UTF-8. --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    {{-- Đặt các thuộc tính viewport để thiết kế đáp ứng. --}}
    <link rel="icon" href="{{ URL::asset('/assets/logo.svg') }}" />
    {{-- Liên kết đến một biểu tượng favicon được đặt tại 'assets/logo.svg'. --}}
    <title>@yield('title', 'Melody')</title>
    {{-- Đặt tiêu đề của tài liệu HTML.
         Phần @yield('title') là một giữ chỗ sẽ được thay thế bằng tiêu đề thực tế trong các chế độ xem con. --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Là một công cụ xây dựng (build tool) cho phát triển frontend.
         Nó được thiết kế để cung cấp hiệu suất tốt trong quá trình phát triển (development) và sau đó chuyển sang môi trường sản xuất (production).
         Vite sử dụng cơ sở hạ tầng của ECMAScript Module (ESM) để cung cấp tốc độ build nhanh và tải trang hiệu quả.

         Đoạn mã này có thể được sử dụng để đồng bộ hóa và tích hợp các tệp CSS và JS vào trang web của bạn thông qua Vite.
         Trong quá trình phát triển, Vite có thể giúp tăng tốc quá trình phát triển và cung cấp các tính năng như hot module replacement (HMR) để tự động làm mới trang khi có thay đổi trong mã nguồn. --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <!-- Add Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Add Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body id="body">
    {{-- @include  là một directive trong Blade templating engine.
         cho phép bạn nạp một phần của giao diện (view) từ một tệp khác vào tệp hiện tại --}}
    <div class="Wrapper">
        @include('client/partials/_header')
        {{-- @yield là một directive trong Blade templating engine,
         được sử dụng để định nghĩa một khu vực (section) trong một tệp view mà có thể được điền (yield) nội dung từ các tệp view con --}}

        @include('client/partials/_footer')
    </div>
</body>

</html>
