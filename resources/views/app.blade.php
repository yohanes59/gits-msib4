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
        <aside class="sidebar">
            <a href="index.html" class="brand-link">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="brand-logo">
                <h1 class="brand-title sidebar-text">SI-Gudang</h1>
            </a>
            <hr class="line">
            <div class="menu">
                <a href="#" class="menu-item">
                    <i class="fa-solid fa-rectangle-list"></i>
                    <p class="sidebar-text">Data Barang</p>
                </a>
            </div>
        </aside>
        <!-- end aside -->
        <!-- navbar -->
        <nav class="navbar">
            <button class="navbar-collapse">
                <i class="fa-solid fa-bars fa-lg"></i>
            </button>
            <button class="navbar-menu">
                <i class="fa-solid fa-user"></i>
                <span>Admin</span>
            </button>
            <button class="navbar-dropdown">
                <a href="" class="navbar-link">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </a>
            </button>
        </nav>
        <!-- end navbar -->
        <!-- content -->
        <section class="content">
            <h1 class="content-header">Data Barang</h1>


            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="No">1</td>
                        <td data-label="Nama Barang">Aqua</td>
                        <td data-label="Kategori">Minuman</td>
                        <td data-label="Harga">4000</td>
                        <td data-label="Jumlah">50</td>
                    </tr>

                </tbody>
            </table>


        </section>
        <!-- end content -->
        <!-- footer -->
        <footer class="footer">
            <p>© 2023 <a href="https://yohanescahyadi.000webhostapp.com/">By Yohanes Cahyadi</a></p>
        </footer>
        <!-- end footer -->
    </main>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
