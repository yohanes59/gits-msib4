<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <title>Tugas CRUD | Home</title>
</head>

<body>

    <main>
        <!-- Start Header -->
        <div class="header">
            <!-- Start Shopping Cart -->
            {{-- pakai include karena apabila pakai @yield javascript tidak berfungsi --}}
            @include('pages.user.cart.cart')
            <!-- End Shopping Cart -->
            <!-- Start Navbar -->
            @include('layouts.user.navbar')
            <!-- End Navbar -->
        </div>

        <!-- End Header -->

        <!-- Start Content -->
        @yield('content')
        <!-- End Content -->

        <!-- footer -->
        @include('layouts.user.footer')
        <!-- end footer -->
    </main>
    {{-- </div> --}}
    <script src="{{ asset('user/js/script.js') }}"></script>
</body>

</html>
