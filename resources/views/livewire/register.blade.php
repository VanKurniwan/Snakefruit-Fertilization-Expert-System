<main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background" style="padding: 40px 0 20px 0">
        <div class="container position-relative">
            <h1>
                Selamat Datang di Website <br>
                Sistem Pakar Pemupukan Salak
            </h1>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section position-relative"
        style="background-image: url('assets/img/hero-bg.jpg'); 
                background-size: cover; 
                background-repeat: no-repeat; 
                background-position: center; 
                position: relative;">

        <!-- Overlay -->
        <div class="overlay"
            style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(30, 67, 86, 0.3); z-index: 1;">
        </div>

        <!-- Section Title -->
        <div class="container section-title" style="padding-bottom: 20px; position: relative; z-index: 2;"
            data-aos="fade-up">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="card px-3" style="width: 550px">
                    <div class="card-body">
                        <h2>Register</h2>
                        <form wire:submit.prevent='register' action="#">
                            <div class="mt-4 mb-4 text-start">
                                <label for="Username" class="form-label" style="text-align: left">
                                    Username
                                </label>
                                <input wire:model='username' type="text" class="form-control" id="Username"
                                    placeholder="Tuliskan username anda" required>
                            </div>
                            <div class="mb-2 text-start">
                                <label for="Nama" class="form-label" style="text-align: left">
                                    Nama
                                </label>
                                <input wire:model='nama' type="text" class="form-control" id="Nama"
                                    placeholder="Tuliskan nama anda" required>
                            </div>
                            <div class="mb-2 text-start">
                                <label for="Umur" class="form-label" style="text-align: left">
                                    Umur
                                </label>
                                <input wire:model='umur' type="number" class="form-control" id="Umur"
                                    placeholder="Tuliskan umur anda" required>
                            </div>
                            <div class="mb-2 text-start">
                                <label for="Pekerjaan" class="form-label" style="text-align: left">
                                    Pekerjaan
                                </label>
                                <input wire:model='pekerjaan' type="text" class="form-control" id="Pekerjaan"
                                    placeholder="Tuliskan pekerjaan anda" required>
                            </div>
                            <div class="mb-2 text-start">
                                <label for="Alamat" class="form-label" style="text-align: left">
                                    Alamat
                                </label>
                                <input wire:model='alamat' type="text" class="form-control" id="Alamat"
                                    placeholder="Tuliskan alamat anda" required>
                            </div>
                            <div class="mb-2 text-start">
                                <label for="NoTelp" class="form-label" style="text-align: left">
                                    Nomor Telepon
                                </label>
                                <input wire:model='notelp' type="tel" class="form-control" id="NoTelp"
                                    placeholder="Tuliskan nomor telepon anda" required>
                            </div>
                            <div class="mb-2 text-start">
                                <label for="Password" class="form-label" style="text-align: left">
                                    Password
                                </label>
                                <input wire:model='password' type="password" class="form-control" id="Password"
                                    placeholder="Tuliskan password anda" minlength="8" required>
                            </div>
                            <div class="mb-2 text-start">
                                <label for="Password2" class="form-label" style="text-align: left">
                                    Re-Password
                                </label>
                                <input wire:model='repassword' type="password" class="form-control" id="Password2"
                                    placeholder="Tuliskan ulang password anda" minlength="8" required>
                            </div>
                            <div class="mb-4">
                                <span class="text-secondary">Sudah memiliki akun ? <a wire.navigate
                                        href="/">Login</a>
                                </span>
                            </div>
                            <div class="mb-1">
                                @if (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-primary fw-bold fs-5"
                                    style="width: 110px; height: 50px">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="h-100 d-flex align-items-center justify-content-center">

            </div>
        </div>

    </section>
    <!-- /Starter Section Section -->
</main>
