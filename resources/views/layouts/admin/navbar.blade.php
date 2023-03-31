<nav class="navbar">
    <button class="navbar-collapse">
        <i class="fa-solid fa-bars fa-lg"></i>
    </button>
    <button class="navbar-menu">
        <i class="fa-solid fa-user"></i>
        <span>{{ Auth::user()->username }}</span>
    </button>
    <button class="navbar-dropdown">
        <a href="/logout" class="navbar-link">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>
    </button>
</nav>