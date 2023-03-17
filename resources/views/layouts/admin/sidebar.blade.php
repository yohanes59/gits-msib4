<aside class="sidebar">
    <a href="" class="brand-link">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="brand-logo">
        <h1 class="brand-title sidebar-text">Tugas CRUD</h1>
    </a>
    <hr class="line">
    <div class="menu">
        <a href="{{ url('/kategori') }}" class="menu-item">
            <i class="fa-solid fa-clipboard-check"></i>
            <p class="sidebar-text">Kategori</p>
        </a>
        <a href="{{ url('/produk') }}" class="menu-item">
            <i class="fa-solid fa-rectangle-list"></i>
            <p class="sidebar-text">Produk</p>
        </a>
    </div>
</aside>