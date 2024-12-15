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
                        Mengisi Data Gejala Tanaman
                    </h3>
                    {{-- <img src="assets/img/services.jpg" alt="" class="img-fluid services-img"> --}}
                    <p>
                        Memungkinkan pengguna untuk menginput kondisi atau gejala tanaman salak yang mereka amati,
                        seperti fase pertumbuhan, kondisi tanah, atau tanda-tanda kerusakan tanaman. Data ini akan
                        digunakan untuk analisis sistem pakar guna memberikan rekomendasi pupuk yang tepat.
                    </p>
                    <h2>Akses Halaman Input Data Gejala</h2>
                    <p>
                    <ol>
                        <li>
                            Pengguna masuk ke halaman Data Gejala Tanaman melalui Menu Utama dengan memilih opsi
                            Analisis Gejala atau Gejala dan Solusi.
                        </li>
                        <li>
                            Di halaman ini, pengguna akan melihat formulir input dengan berbagai kolom dan pilihan yang
                            menggambarkan kondisi tanaman, seperti jenis gejala dan fase pertumbuhan.
                        </li>
                    </ol>
                    </p>
                    <h2>Pengisian Data Gejala Tanaman</h2>
                    <p>Pada halaman Data Gejala Tanaman, pengguna diharuskan mengisi beberapa informasi terkait kondisi
                        tanaman. Berikut elemen-elemen utama pada halaman ini:</p>
                    <ul>
                        <li style="display: block"><i class="bi bi-check-circle"></i>
                            <span class="fw-bold">Fase Pertumbuhan Tanaman:</span>
                            <p>
                                Pengguna memilih antara Fase Vegetatif (pertumbuhan daun dan batang) atau Fase
                                Generatif (pembentukan bunga dan buah).
                                Informasi ini membantu sistem dalam menentukan jenis pupuk yang cocok berdasarkan
                                tahap perkembangan tanaman.
                            </p>
                        </li>
                        <li style="display: block"><i class="bi bi-check-circle"></i>
                            <span class="fw-bold">Kondisi Tanah:</span>
                            <p>
                                Pengguna memilih kondisi seperti tanah kurang subur atau sedikit bahan organik.
                                Informasi kondisi tanah membantu dalam menilai apakah pupuk organik atau pupuk yang
                                meningkatkan kesuburan tanah diperlukan.
                            </p>
                        </li>
                        <li style="display: block"><i class="bi bi-check-circle"></i>
                            <span class="fw-bold">Musim:</span>
                            <p>
                                Pengguna memilih musim saat ini, seperti musim hujan atau musim kemarau. Musim
                                berpengaruh pada kebutuhan nutrisi tanaman, terutama dalam memilih pupuk yang stabil
                                terhadap pencucian air hujan atau pupuk yang tahan kering.
                            </p>
                        </li>
                        <li style="display: block"><i class="bi bi-check-circle"></i>
                            <span class="fw-bold">Gejala Fisik Tanaman:</span>
                            <p>
                                Pengguna memilih gejala fisik yang tampak pada tanaman, seperti: <br>
                                - Daun Menguning: Menunjukkan kemungkinan kekurangan sulfur atau nitrogen. <br>
                                - Daun Rontok: Mungkin disebabkan oleh fase generatif atau serangan penyakit. <br>
                                - Akar Busuk: Indikasi kelembapan berlebih atau masalah pada kualitas tanah. <br>
                                - Buah Kecil atau Tidak Berkembang: Menunjukkan kebutuhan kalium atau fosfor yang kurang
                                memadai. <br>
                                - Tanda Serangan Hama: Seperti lubang pada daun atau kerusakan akibat hama. <br>
                                Data ini sangat penting dalam analisis, karena setiap gejala berkaitan dengan jenis
                                pupuk yang berbeda.
                            </p>
                        </li>
                    </ul>
                    <h2>Proses Validasi dan Analisis Data</h2>
                    <p>
                    <ol>
                        <li>
                            <span class="fw-bold">
                                Validasi Data Input:
                            </span>
                            <p>Sistem memeriksa apakah semua kolom wajib diisi oleh pengguna untuk memastikan
                                kelengkapan data. Jika ada data yang kurang atau tidak valid, sistem akan meminta
                                pengguna melengkapi data terlebih dahulu sebelum melanjutkan.</p>
                        </li>
                        <li>
                            <span class="fw-bold">
                                Proses Analisis Naive Bayes:
                            </span>
                            <p>Setelah data diinput lengkap, pengguna mengklik tombol Proses Analisis. Sistem pakar
                                menggunakan metode Naive Bayes untuk menghitung probabilitas dan menentukan jenis pupuk
                                yang paling cocok berdasarkan gejala yang diinput.</p>
                        </li>
                    </ol>
                    </p>
                    <h2>Manfaat dan Kegunaan Data Gejala Tanaman</h2>
                    <p>Dengan data gejala yang tepat, sistem dapat memberikan rekomendasi yang lebih akurat, yang
                        bertujuan untuk:</p>
                    <p>
                    <ol>
                        <li>
                            Meningkatkan kualitas dan kuantitas hasil panen salak.
                        </li>
                        <li>
                            Mengurangi risiko kesalahan pemupukan yang bisa berdampak negatif pada tanaman.
                        </li>
                        <li>
                            Memberikan panduan yang lebih praktis bagi petani untuk mengambil keputusan terkait
                            perawatan tanaman.
                        </li>
                    </ol>
                    </p>
                </div>

            </div>
        </div>

    </section><!-- /Service Details Section -->
</main>
