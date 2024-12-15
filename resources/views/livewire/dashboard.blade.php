<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <!-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->

        <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="container position-relative">

                <div class="carousel-item active">
                    <div class="carousel-container">
                        <h2>Rekomendasi Pemupukan Tepat <br> untuk Tanaman Salak</h2>
                        <p>Dengan memanfaatkan
                            algoritma Naive Bayes, sistem menghitung probabilitas setiap jenis pupuk dan mengusulkan
                            pilihan yang optimal untuk meningkatkan produktivitas tanaman salak, seperti Urea, ZA, TSP,
                            KCL, NPK, dan pupuk organik lainnya.</p>
                        <a href="#features" class="btn-get-started">Baca Selengkapnya</a>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2>Analisis Gejala Tanaman Salak</h2>
                        <p>Dengan memasukkan gejala yang muncul pada tanaman salak, seperti daun menguning, akar lemah,
                            buah
                            kecil, atau tanah kurang subur. Sistem akan menganalisis gejala tersebut menggunakan metode
                            Naive Bayes untuk menentukan pupuk yang paling tepat, membantu petani mencegah kerusakan
                            tanaman dan memperbaiki kualitas hasil panen.</p>
                        <a href="/gejala-solusi" class="btn-get-started">Coba Sekarang</a>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2>Pemilihan Pupuk Berdasarkan Kondisi Spesifik</h2>
                        <p>Memberikan saran pemupukan yang dipersonalisasi berdasarkan kondisi spesifik di lapangan,
                            seperti cuaca, kondisi tanah, serta fase
                            pertumbuhan. Sistem memastikan rekomendasi pupuk, seperti Pupuk
                            Kandang, Kompos, atau Pupuk Hijau, sesuai dengan kebutuhan tanaman di berbagai situasi untuk
                            memaksimalkan hasil.</p>
                        <a href="/gejala-solusi" class="btn-get-started">Coba Sekarang</a>
                    </div>
                </div><!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>

            </div>

        </div>

    </section><!-- /Hero Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <div class="mb-5 h-100 d-flex align-items-center justify-content-center">
            {{-- check session --}}
            @if (session()->has('nama'))
                <h2>Selamat datang, {{ session('nama') }}! 👋😊</h2>
            @else
                <h2>Anda belum login.</h2>
            @endif
        </div>

        <hr class="my-4">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Jenis Pupuk Salak</h2>
            <p>Berikut beragam jenis pupuk untuk tanaman salak <br> yang menjadi objek penelitian kami</p>
        </div><!-- End Section Title -->

        <div class="container">

            {{-- Urea --}}
            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="assets/img/pupuk/urea.png" style="max-height: 450px" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Urea</h3>
                    <p class="fst-italic">
                        Pupuk dengan kandungan nitrogen tinggi yang umumnya digunakan untuk meningkatkan pertumbuhan
                        daun dan batang selama fase vegetatif.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Kandungan Nitrogen Tinggi:</span>
                                Mengandung nitrogen sekitar 46%,
                                sangat efektif untuk
                                merangsang pertumbuhan daun dan batang, terutama pada fase vegetatif.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Cepat Diserap Tanaman:</span>
                                Urea mudah larut dalam air, sehingga
                                cepat diserap oleh tanaman
                                dan langsung memberikan efek pada pertumbuhan.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Harga Terjangkau:</span>
                                Pupuk urea biasanya lebih ekonomis
                                dibanding pupuk nitrogen lainnya,
                                membuatnya lebih mudah diakses oleh petani.
                            </span>
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            {{-- ZA --}}
            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                    data-aos-delay="200">
                    <img src="assets/img/pupuk/za.png" style="max-height: 450px" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>ZA (Zwavelzure Ammoniak)</h3>
                    <p class="fst-italic">
                        Pupuk yang cocok digunakan dalam kondisi kemarau untuk mencegah daun menguning akibat
                        kekurangan
                        sulfur.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Mengandung Sulfur:</span>
                                Selain nitrogen, ZA juga mengandung sulfur (S) yang penting untuk pembentukan
                                klorofil
                                dan memperbaiki warna daun, mencegah daun menguning.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Tahan Cuci Hujan:</span>
                                ZA lebih stabil terhadap pencucian oleh hujan dibandingkan urea, sehingga cocok
                                diaplikasikan pada musim kemarau.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Meningkatkan Kualitas Tanah:</span>
                                Penggunaan ZA membantu menyeimbangkan pH tanah dan meningkatkan kesuburan jangka
                                panjang.
                            </span>
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            {{-- TSP --}}
            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/pupuk/tsp.png" style="max-height: 450px" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up">
                    <h3>TSP (Triple Super Phosphate)</h3>
                    <p class="fst-italic">Pupuk yang digunakan untuk memperkuat pertumbuhan akar dan meningkatkan
                        produksi bunga dan
                        buah
                        pada fase generatif.</p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Kandungan Fosfat Tinggi:</span>
                                Mengandung fosfat (P2O5) sekitar 46%, yang penting untuk pembentukan akar yang kuat
                                dan
                                pertumbuhan bunga serta buah.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Mendukung Perkembangan Generatif:</span>
                                TSP sangat efektif selama fase generatif tanaman, membantu meningkatkan pembentukan
                                bunga dan kualitas buah.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Tidak Mudah Larut:</span>
                                TSP tidak mudah tercuci oleh air hujan, sehingga cocok digunakan di area dengan
                                curah
                                hujan tinggi.
                            </span>
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            {{-- KCL --}}
            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/pupuk/kcl.png" style="max-height: 450px" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                    <h3>KCL (Kalium Chloride, P04)</h3>
                    <p class="fst-italic">
                        Pupuk yang berguna untuk meningkatkan kualitas buah, mencegah buah kecil dan tidak
                        berkembang.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Tinggi Kandungan Kalium:</span>
                                KCL mengandung kalium (K) tinggi yang membantu memperkuat jaringan tanaman dan
                                meningkatkan ketahanan terhadap penyakit.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Meningkatkan Kualitas Buah:</span>
                                Penggunaan KCL dapat meningkatkan ukuran, rasa, dan kekerasan buah, sehingga buah
                                lebih
                                tahan lama.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Menyeimbangkan Nutrisi Tanaman:</span>
                                Kalium dalam KCL membantu mengatur distribusi air dan nutrisi di dalam tanaman,
                                penting
                                untuk kondisi musim kemarau.
                            </span>
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            {{-- NPK --}}
            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="assets/img/pupuk/npk.png" style="max-height: 450px" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>NPK (Nitrogen, Phosphor, Kalium)</h3>
                    <p class="fst-italic">
                        Pupuk majemuk yang seimbang dan cocok digunakan untuk meningkatkan hasil panen, terutama di
                        musim kemarau.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Komposisi Seimbang:</span>
                                Mengandung kombinasi nitrogen, fosfor, dan kalium dalam satu pupuk, yang mendukung
                                pertumbuhan tanaman secara keseluruhan.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Meningkatkan Hasil Panen:</span>
                                Memberikan nutrisi yang dibutuhkan tanaman untuk meningkatkan produksi hasil panen,
                                baik
                                kualitas maupun kuantitas.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Cocok untuk Semua Fase:</span>
                                Dapat digunakan di berbagai fase pertumbuhan tanaman, dari vegetatif hingga
                                generatif,
                                karena mencakup tiga elemen penting.
                            </span>
                        </li>
                </div>
            </div><!-- Features Item -->

            {{-- Pupuk Kandang --}}
            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                    data-aos-delay="200">
                    <img src="assets/img/pupuk/kandang.png" style="max-height: 450px" class="img-fluid"
                        alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Pupuk Kandang</h3>
                    <p class="fst-italic">
                        Pupuk organik yang dapat memperbaiki struktur tanah dan cocok digunakan ketika kondisi tanah
                        kurang subur.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Memperbaiki Struktur Tanah:</span>
                                Pupuk kandang kaya akan bahan organik yang dapat memperbaiki struktur tanah,
                                meningkatkan porositas dan retensi air.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Menyediakan Nutrisi Alami:</span>
                                Mengandung nutrisi lengkap yang dibutuhkan tanaman, termasuk nitrogen, fosfor, dan
                                kalium, serta mikroorganisme bermanfaat.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Ramah Lingkungan:</span>
                                Pupuk kandang merupakan pupuk organik yang alami dan tidak merusak lingkungan, serta
                                mendukung keberlanjutan pertanian.
                            </span>
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            {{-- Kompos --}}
            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/pupuk/kompos.jpeg" style="max-height: 450px; border-radius: 25px;"
                        class="img-fluid">
                </div>
                <div class="col-md-7" data-aos="fade-up">
                    <h3>Kompos</h3>
                    <p class="fst-italic">Pupuk organik yang berfungsi memperkaya tanah dengan bahan organik dan
                        memperbaiki retensi
                        air,
                        terutama pada kondisi serangan hama atau kerusakan tanaman.</p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Memperkaya Tanah dengan Bahan Organik: </span>
                                Kompos menyediakan sumber bahan organik yang memperbaiki kesuburan tanah dan
                                mendorong
                                aktivitas mikroorganisme.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Meningkatkan Kapasitas Retensi Air: </span>
                                Kompos membantu tanah menyimpan lebih banyak air, yang sangat penting dalam kondisi
                                kekeringan.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Memperbaiki Keseimbangan Hara:</span>
                                Kompos membantu menyeimbangkan kadar nutrisi tanah dengan pelepasan nutrisi secara
                                bertahap.
                            </span>
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            {{-- Pupuk Hijau --}}
            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/pupuk/hijau.jpg" style="max-height: 450px; border-radius: 25px;"
                        class="img-fluid">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                    <h3>Pupuk Hijau</h3>
                    <p class="fst-italic">
                        Pupuk organik yang diaplikasikan terutama selama musim hujan untuk menambah nutrisi tanah
                        secara
                        alami.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Meningkatkan Kesuburan Tanah: </span>
                                Pupuk hijau dibuat dari tanaman penutup tanah yang kemudian dibajak ke dalam tanah
                                untuk
                                meningkatkan kandungan nitrogen dan bahan organik.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Ramah Lingkungan: </span>
                                Sebagai pupuk organik alami, pupuk hijau tidak mencemari tanah atau air dan
                                mendukung
                                keberlanjutan ekosistem pertanian.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Mengurangi Erosi: </span>
                                Penggunaan tanaman penutup tanah untuk pupuk hijau membantu mengurangi erosi tanah
                                dan
                                memperbaiki struktur tanah secara alami.
                            </span>
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

        </div>

        <hr class="my-4">

        <div class="container section-title" style="padding-bottom: 20px" data-aos="fade-up">
            <h2>Buah Salak</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="assets/img/salak.png" style="max-height: 450px" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Salak (Snakefruit)</h3>
                    <p style="text-align: justify">
                        Salak (Salacca zalacca) merupakan jenis tanaman palma yang berasal dari Indonesia dan banyak
                        dibudidayakan di daerah beriklim tropis. Buahnya yang unik dengan kulit bersisik mirip ular
                        memberikan nama khas “salak” atau “snakefruit” dalam bahasa Inggris.
                    </p>
                    <p style="text-align: justify">
                        Salak tumbuh subur di berbagai wilayah di Indonesia, terutama di Jawa, Sumatra, Bali, dan
                        Kalimantan. Daerah penghasil salak terbesar adalah Kabupaten Sleman di Yogyakarta, yang dikenal
                        dengan varietas unggulnya yaitu Salak Pondoh.
                    </p>
                    <h2>
                        Manfaat buah salak
                    </h2>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Kaya Antioksidan:</span>
                                Salak mengandung antioksidan tinggi, termasuk vitamin C dan polifenol, yang membantu
                                melawan radikal bebas dan menjaga kesehatan sel.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Baik untuk Pencernaan:</span>
                                Kandungan seratnya membantu melancarkan pencernaan dan menjaga kesehatan usus.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Meningkatkan Kesehatan Mata:</span>
                                Buah salak mengandung beta-karoten yang bermanfaat untuk kesehatan mata, mirip seperti
                                wortel.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Meningkatkan Energi:</span>
                                Kandungan karbohidrat dalam salak menjadikannya sumber energi cepat yang baik.
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>
                                <span class="fw-bold">Meningkatkan Daya Ingat:</span>
                                Beberapa penelitian menunjukkan bahwa konsumsi salak dapat mendukung fungsi kognitif,
                                sehingga sering disebut sebagai “buah memori.”
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section><!-- /Features Section -->

</main>
