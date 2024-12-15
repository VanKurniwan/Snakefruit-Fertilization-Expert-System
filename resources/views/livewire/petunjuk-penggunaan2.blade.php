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
                        Mengakses Menu Utama
                    </h3>
                    {{-- <img src="assets/img/services.jpg" alt="" class="img-fluid services-img"> --}}
                    <p>
                        Pada menu utama kami menyediakan informasi terkait fungsi dan relevansi website kami untuk
                        membantu petani salak dalam memilih pupuk yang sesuai dengan kondisi tanaman dan cuaca. Kami
                        juga menyediakan daftar pupuk yang menjadi fokus objek penelitian kami. Kami harap pengguna
                        dapat memahami fungsionalitas dan tujuan dari website ini
                    </p>

                    <h2>Akses Menu Utama Setelah Login</h2>
                    <ul>
                        <li><i class="bi bi-check-circle"></i>
                            <span>
                                <span class="fw-bold">
                                    Arahkan ke Menu Utama:
                                </span>
                                Setelah berhasil login, pengguna akan diarahkan secara otomatis
                                ke Menu Utama.
                            </span>
                        </li>
                        <li><i class="bi bi-check-circle"></i>
                            <span>
                                <span class="fw-bold">
                                    Tampilan Awal Menu Utama:
                                </span>
                                Menu Utama menampilkan latar belakang yang disesuaikan dengan objek penelitian, yaitu
                                tanaman salak, untuk memberikan nuansa yang relevan bagi pengguna. <br>
                                Tampilan visual ini dirancang agar mudah dipahami oleh petani atau pengguna umum.
                            </span>
                        </li>
                    </ul>
                    <h2>
                        Navigasi Fitur di Menu Utama
                    </h2>
                    <p>
                        Pada Menu Utama, terdapat beberapa tombol atau ikon navigasi yang memudahkan pengguna untuk
                        mengakses fitur-fitur utama. Berikut fitur-fitur yang tersedia di Menu Utama:
                    </p>
                    <ol>
                        <li>
                            <span class="fw-bold">
                                Fitur Gejala & Solusi:
                            </span>
                            Fitur utama ini memungkinkan pengguna untuk memasukkan gejala tanaman salak yang
                            sedang diamati, seperti kondisi daun, akar, atau musim.
                            Pengguna dapat mengklik tombol Analisis Gejala untuk diarahkan ke halaman input
                            data gejala.
                            Setelah data gejala diinput, pengguna dapat memproses data tersebut untuk
                            mendapatkan rekomendasi pupuk yang paling sesuai.
                        </li>
                        <li>
                            <span class="fw-bold">
                                Fitur Petunjuk Penggunaan:
                            </span>
                            Fitur ini menyediakan panduan lengkap tentang cara penggunaan sistem bagi pengguna.
                            Pengguna bisa mengakses halaman ini dengan memilih Petunjuk Penggunaan di Menu Utama.
                            Di halaman ini, terdapat informasi langkah-langkah penggunaan sistem, mulai dari proses
                            login, input data gejala, hingga interpretasi hasil rekomendasi.
                        </li>
                        <li>
                            <span class="fw-bold">
                                Fitur Pengembang / About:
                            </span>
                            Halaman ini berisi informasi mengenai tim pengembang, kontak yang dapat
                            dihubungi, dan deskripsi singkat tentang proyek sistem pakar ini.
                            Pengguna dapat mengaksesnya dengan mengklik tombol About di Menu Utama.
                            Fitur ini membantu pengguna memahami latar belakang sistem dan memberikan informasi
                            kontak jika diperlukan bantuan atau saran teknis.
                        </li>
                        <li>
                            <span class="fw-bold">
                                Fitur Logout:
                            </span>
                            Untuk keluar dari sistem dengan aman setelah selesai menggunakan fitur-fitur yang
                            ada.
                            Tombol Logout tersedia di Menu Utama atau bagian navigasi atas.
                            Setelah mengklik tombol ini, sistem akan menghapus sesi pengguna dan mengarahkan
                            mereka kembali ke halaman login.
                        </li>
                    </ol>
                    </p>
                </div>

            </div>
        </div>

    </section><!-- /Service Details Section -->
</main>
