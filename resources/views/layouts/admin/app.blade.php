<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 - MVC</title>

    <!-- font roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <main>
        <!-- aside -->
        @include('layouts.admin.sidebar')
        <!-- end aside -->
        <!-- navbar -->
        @include('layouts.admin.navbar')
        <!-- end navbar -->
        <!-- content -->
        <section class="content">
            <h1 class="content-header">@yield('title')</h1>
            @yield('content')
        </section>
        <!-- end content -->
        <!-- footer -->
        @include('layouts.admin.footer')
        <!-- end footer -->
    </main>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
