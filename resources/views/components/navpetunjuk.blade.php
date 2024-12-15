<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

    <div class="service-box">
        <h4>Daftar Petunjuk</h4>
        <div class="services-list">
            <a wire.navigate href="/petunjuk-penggunaan" @class(['active' => request()->is('petunjuk-penggunaan')])><i
                    class="bi bi-arrow-right-circle"></i>
                <span>Login, Register, Logout</span>
            </a>
            <a wire.navigate href="/petunjuk-penggunaan2" @class(['active' => request()->is('petunjuk-penggunaan2')])><i
                    class="bi bi-arrow-right-circle"></i>
                <span>Mengakses Menu Utama</span>
            </a>
            <a wire.navigate href="/petunjuk-penggunaan3" @class(['active' => request()->is('petunjuk-penggunaan3')])><i
                    class="bi bi-arrow-right-circle"></i>
                <span>Mengisi Data Gejala Tanaman</span>
            </a>
            <a wire.navigate href="/petunjuk-penggunaan4" @class(['active' => request()->is('petunjuk-penggunaan4')])><i
                    class="bi bi-arrow-right-circle"></i>
                <span>Melihat Hasil Rekomendasi</span>
            </a>
            <a wire.navigate href="/petunjuk-penggunaan5" @class(['active' => request()->is('petunjuk-penggunaan5')])><i
                    class="bi bi-arrow-right-circle"></i>
                <span>Menghubungi Pengembang</span>
            </a>
        </div>
    </div><!-- End Services List -->
</div>
