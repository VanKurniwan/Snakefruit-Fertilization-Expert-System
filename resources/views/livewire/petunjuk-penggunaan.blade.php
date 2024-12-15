<main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1>Petunjuk Penggunaan</h1>
            <p>Berikut merupakan petunjuk penggunaan website kami</p>
        </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">
            <div class="row gy-5">

                {{-- Navigation --}}
                <x-navpetunjuk></x-navpetunjuk>

                {{-- Explanation --}}
                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <h3>
                        Fitur Login, Register, Logout
                    </h3>
                    {{-- <img src="assets/img/services.jpg" alt="" class="img-fluid services-img"> --}}
                    <p>
                        Kami menyediakan fitur login, register, dan logout untuk mengatur role dan database atas
                        pengguna yang mengunjungi website kami. Fitur login kami gunakan untuk memisahkan antara
                        pengguna biasa (user) dengan admin, dimana role admin dan role user memiliki hak akses yang
                        berbeda,
                        yaitu :
                    </p>

                    <h3>User</h3>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Mampu melihat daftar rekomendasi pupuk</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Mampu melakukan kalkulasi singkat untuk mendapat
                                rekomendasi pupuk tanaman salak</span></li>
                    </ul>
                    <h3>Admin</h3>
                    <ul>
                        <li><i class="bi bi-check-circle"></i>
                            <span>Mampu melihat proses perhitungan dan kalkulasi
                                rekomendasi pupuk secara lebih detail</span>
                        </li>
                    </ul>
                    <h2>Login & Register</h2>
                    <p>
                    <ol>
                        <li>
                            Halaman Registrasi: Pada halaman register, pengguna atau admin mengisi formulir pendaftaran
                            berisi informasi dasar seperti nama lengkap, email, username, password, dan konfirmasi
                            password..
                        </li>
                        <li>
                            Halaman Login: Pengguna mengakses halaman login yangmenampilkan
                            form untuk memasukkan username danpassword.
                        </li>
                        <li>Input Username dan Password: Pengguna mengakses halaman login yang menampilkan form untuk
                            memasukkan username danpassword.</li>
                        <li>Pengecekan Kredensial: Sistem mengambil data yang diinput pengguna dan memeriksa kecocokan
                            dengan data yang ada di database</li>
                        <li>Setelah login pengguna dapat mengakses fitur berdasarkan peran</li>
                    </ol>
                    </p>
                    <h2>Logout</h2>
                    <p>
                        Tombol Logout: Setelah pengguna selesai menggunakan sistem, mereka dapat mengklik tombol Logout
                        yang tersedia di bagian menu.
                    </p>
                </div>

            </div>
        </div>

    </section><!-- /Service Details Section -->
</main>
