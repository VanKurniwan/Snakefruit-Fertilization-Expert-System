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
                        Melihat Hasil Rekomendasi
                    </h3>
                    {{-- <img src="assets/img/services.jpg" alt="" class="img-fluid services-img"> --}}
                    <p>
                        Menampilkan hasil analisis sistem pakar terkait jenis pupuk yang direkomendasikan berdasarkan
                        gejala yang telah diinput oleh pengguna, lengkap dengan penjelasan mengapa pupuk tersebut
                        dipilih.
                    </p>
                    <h2>Akses Hasil Rekomendasi</h2>
                    <p>
                    <ol>
                        <li>
                            Setelah pengguna mengisi data gejala tanaman dan mengklik tombol Proses Analisis, sistem
                            akan langsung mengarahkan mereka ke halaman Hasil Rekomendasi.
                        </li>
                        <li>
                            Pada halaman ini, pengguna akan melihat hasil rekomendasi dalam format yang mudah dipahami,
                            biasanya terdiri dari nama pupuk, deskripsi, dan saran penggunaan.
                        </li>
                    </ol>
                    </p>
                    <h2>Struktur Tampilan Hasil Rekomendasi</h2>
                    <ul>
                        <li style="display: block"><i class="bi bi-check-circle"></i>
                            <span class="fw-bold">Jenis Pupuk yang Direkomendasikan:</span>
                            <p>
                                Sistem menampilkan jenis pupuk yang paling sesuai berdasarkan analisis data gejala,
                                misalnya Urea, ZA, TSP, atau pupuk lainnya.
                                Nama pupuk ditampilkan di bagian atas sebagai fokus utama, agar pengguna langsung tahu
                                jenis pupuk yang direkomendasikan.
                            </p>
                        </li>
                        <li style="display: block"><i class="bi bi-check-circle"></i>
                            <span class="fw-bold">Deskripsi Singkat Pupuk:</span>
                            <p>
                                Di bawah nama pupuk, terdapat deskripsi singkat mengenai pupuk tersebut, misalnya
                                kandungan utama (seperti nitrogen untuk urea) dan fungsi utamanya (misalnya meningkatkan
                                pertumbuhan daun dan batang). Penjelasan ini membantu pengguna memahami alasan ilmiah di
                                balik rekomendasi pupuk tersebut.
                            </p>
                        </li>
                        <li style="display: block"><i class="bi bi-check-circle"></i>
                            <span class="fw-bold">Penjelasan Berdasarkan Gejala yang Dipilih:</span>
                            <p>
                                Sistem memberikan penjelasan mengenai mengapa pupuk tersebut direkomendasikan
                                berdasarkan gejala yang telah diinput. Penjelasan ini penting agar pengguna memahami
                                keterkaitan antara gejala tanaman dan jenis pupuk yang direkomendasikan.
                            </p>
                        </li>
                    </ul>
                    {{--  --}}
                    <h2>Manfaat Hasil Rekomendasi</h2>
                    <p>
                    <ol>
                        <li>
                            <span class="fw-bold">
                                Panduan Praktis untuk Petani:
                            </span>
                            Hasil rekomendasi memberikan panduan langsung kepada petani mengenai pupuk yang paling
                            sesuai untuk kondisi tanaman mereka, sehingga mereka dapat mengoptimalkan pertumbuhan dan
                            hasil panen.
                        </li>
                        <li>
                            <span class="fw-bold">
                                Pengambilan Keputusan yang Lebih Terarah:
                            </span>
                            Dengan penjelasan mengenai alasan rekomendasi, petani dapat memahami lebih baik kebutuhan
                            tanaman mereka dan melakukan pemupukan secara lebih terarah dan tepat.
                        </li>
                        <li>
                            <span class="fw-bold">
                                Efisiensi dalam Perawatan Tanaman:
                            </span>
                            Saran penggunaan yang disertakan dalam hasil rekomendasi membantu petani mengatur dosis dan
                            frekuensi aplikasi pupuk dengan benar, sehingga mencegah penggunaan pupuk berlebihan atau
                            kurang yang bisa merugikan tanaman.
                        </li>
                    </ol>
                    </p>
                </div>

            </div>
        </div>

    </section><!-- /Service Details Section -->
</main>
