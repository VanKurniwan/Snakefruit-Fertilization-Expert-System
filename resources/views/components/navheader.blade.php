<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="/home" class="logo d-flex align-items-center">
            {{-- <h1 class="sitename">Snakefruit Fertilization <br> Expert System</h1> --}}
            <h1 class="sitename">Sistem Pakar <br> Pemupukan Salak </h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a wire.navigate href="/home" @class(['active' => request()->is('home')])>Home</a></li>
                <li><a wire.navigate href="/petunjuk-penggunaan" @class(['active' => request()->is('petunjuk-penggunaan')])>Petunjuk Penggunaan</a>
                </li>
                <li><a wire.navigate href="/petunjuk-perawatan" @class(['active' => request()->is('petunjuk-perawatan')])>Petunjuk Perawatan</a>
                </li>
                <li><a wire.navigate href="/about" @class(['active' => request()->is('about')])>About</a></li>
                <li><a wire.navigate href="/gejala-solusi" @class(['active' => request()->is('gejala-solusi')])>Gejala & Solusi</a></li>
                <li><a wire.navigate href="/logout" onclick="return confirmLogout()">Logout</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>

    <script>
        function confirmLogout() {
            if (confirm("Apakah Anda yakin ingin logout?")) {
                return true;
            }
            return false;
        }
    </script>
</header>
