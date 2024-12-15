<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1>Gejala & Solusi</h1>
            <p>Analisis Gejala pada tanaman salak anda, <br>kami akan membantu merekomendasikan pupuk yang paling
                sesuai
                dengan algoritma naive bayes
            </p>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Analisis Pemupukan Tanaman Salak</h2>
            <p>Isikan form berikut dengan gejala yang sesuai dengan kondisi tanaman salak anda saat ini</p>
        </div>

        @if ($L6b == [])
            <x-formgejala></x-formgejala>
        @elseif (session('username') == 'Admin')
            {{-- User Input --}}
            <div class="container" data-aos="fade-up">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="card mb-3" style="width: 800px; padding: 20px">
                        <div class="card-body">
                            <h2 class="mb-3"> Berdasarkan gejala yang anda pilih berikut : </h2>
                            <ul>
                                @foreach ($listJawaban as $jawaban)
                                    <li class="fs-5">{{ $jawaban }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Langkah Penyelesaian --}}
            {{-- L1 --}}
            <div class="container" data-aos="fade-up">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="card mb-3" style="width: 800px; padding: 20px">
                        <div class="card-body">
                            <h2>
                                Langkah 1 :
                            </h2>
                            <p>
                                Mendefinisikan terlebih dahulu nilai probabilitas dari tiap evidence untuk tiap
                                hipotesis berdasarkan data sampel yang ada
                            </p>
                            <div class="row">
                                @foreach ($L1 as $input => $inputValue)
                                    <div class="col-6">
                                        <span class="fw-bold">🌱 {{ strtoupper($namaPupuk[$input]) }}</span>
                                        <ul>
                                            @foreach ($inputValue as $G => $GValue)
                                                <li>
                                                    {{ strtoupper($G) }} = P(E / H) =
                                                    <span class="fw-bold text-success">
                                                        {{ $GValue }}
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- L2 --}}
            <div class="container" data-aos="fade-up">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="card mb-3" style="width: 800px; padding: 20px">
                        <div class="card-body">
                            <h2>
                                Langkah 2 :
                            </h2>
                            <p>
                                Menjumlahkan nilai probabilitas dari tiap evidence untuk masingmasing
                                hipotesis berdasarkan data sampel.
                            </p>
                            <div class="row g-2">
                                @foreach ($L1 as $input => $inputValue)
                                    <div class="col-6">
                                        <span class="fw-bold">🌱 {{ strtoupper($namaPupuk[$input]) }}</span> <br>
                                        <span> Σ P(E / Hk) =
                                            @php $plus = count($inputValue) - 1; @endphp
                                            @foreach ($inputValue as $G => $GValue)
                                                {{ $GValue }}
                                                @if ($plus !== 0)
                                                    +
                                                    @php $plus-- @endphp
                                                @endif
                                            @endforeach
                                            =
                                            <span class="fw-bold text-success">
                                                {{ $L2[$input] }}
                                            </span>
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- L3 --}}
            <div class="container" data-aos="fade-up">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="card mb-3" style="width: 800px; padding: 20px">
                        <div class="card-body">
                            <h2>
                                Langkah 3 :
                            </h2>
                            <p>
                                Mencari nilai probabilitas hipotesis H tanpa memandang evidence
                                apapun bagi masing-masing.
                            </p>
                            <div class="row">
                                @foreach ($L1 as $input => $inputValue)
                                    <div class="col-6">
                                        <span class="fw-bold">🌱 {{ strtoupper($namaPupuk[$input]) }}</span>
                                        <ul>
                                            @php $currentL3 = $L3[$input]; @endphp
                                            @foreach ($inputValue as $G => $GValue)
                                                <li>
                                                    {{ strtoupper($G) }} = P(H1) = {{ $GValue }} /
                                                    {{ $L2[$input] }} =
                                                    <span class="fw-bold text-success">
                                                        {{ round($currentL3[$G], 5) }}
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- L4 --}}
            <div class="container" data-aos="fade-up">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="card mb-3" style="width: 800px; padding: 20px">
                        <div class="card-body">
                            <h2>
                                Langkah 4 :
                            </h2>
                            <p>
                                Mencari nilai probabilitas hipotesis memandang evidence dengan cara
                                mengalikan nilai probabilitas evidence awal dengan nilai probabilitas
                                hipotesis tanpa memandang evidence dan menjumlahkan hasil perkalian
                                bagi masing-masing hipotesis.
                            </p>
                            <div class="row g-2">
                                @foreach ($L1 as $input => $inputValue)
                                    <div class="col-12">
                                        <span class="fw-bold">🌱 {{ strtoupper($namaPupuk[$input]) }}</span> <br>
                                        <span> Σ =
                                            @php
                                                $plus = count($inputValue) - 1;
                                                $currentL3 = $L3[$input];
                                            @endphp
                                            @foreach ($inputValue as $G => $GValue)
                                                ({{ $GValue }} * {{ round($currentL3[$G], 5) }})
                                                @if ($plus !== 0)
                                                    +
                                                    @php $plus-- @endphp
                                                @endif
                                            @endforeach
                                            <br>
                                        </span>
                                        <span>
                                            =
                                            <span class="fw-bold text-success">
                                                {{ round($L4b[$input], 5) }}
                                            </span>
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- L5 --}}
            <div class="container" data-aos="fade-up">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="card mb-3" style="width: 800px; padding: 20px">
                        <div class="card-body">
                            <h2>
                                Langkah 5 :
                            </h2>
                            <p>
                                Mencari nilai P(Hi|E) atau probabilitas hipotesis Hi benar jika
                                diberikan evidence.
                            </p>
                            <div class="row">
                                @foreach ($L1 as $input => $inputValue)
                                    <div class="col-6">
                                        <span class="fw-bold">🌱 {{ strtoupper($namaPupuk[$input]) }}</span>
                                        <ul>
                                            @php
                                                $currentL4a = $L4a[$input];
                                                $currentL5 = $L5[$input];
                                            @endphp
                                            @foreach ($inputValue as $G => $GValue)
                                                <li>
                                                    {{ strtoupper($G) }} = P(H1|E) = {{ $GValue }} *
                                                    {{ round($currentL4a[$G], 5) }} / {{ round($L4b[$input], 5) }} =
                                                    <span class="fw-bold text-success">
                                                        {{ round($currentL5[$G], 5) }}
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- L6 --}}
            <div class="container" data-aos="fade-up">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="card mb-3" style="width: 800px; padding: 20px">
                        <div class="card-body">
                            <h2>
                                Langkah 6 :
                            </h2>
                            <p>
                                Mencari nilai kesimpulan dari Teorema Bayes dengan cara mengalikan nilai
                                probabilitas evidence awal atau P(E|Hi) dengan nilai hipotesis Hi benar jika
                                diberikan evidence E atau P(Hi|E) dan menjumlahkan hasil perkalian.
                            </p>
                            <div class="row g-2">
                                @foreach ($L1 as $input => $inputValue)
                                    <div class="col-12">
                                        <span class="fw-bold">🌱 {{ strtoupper($namaPupuk[$input]) }}</span> <br>
                                        <span> Σ =
                                            @php
                                                $plus = count($inputValue) - 1;
                                                $currentL5 = $L5[$input];
                                            @endphp
                                            @foreach ($inputValue as $G => $GValue)
                                                ({{ $GValue }} * {{ round($currentL5[$G], 5) }})
                                                @if ($plus !== 0)
                                                    +
                                                    @php $plus-- @endphp
                                                @endif
                                            @endforeach
                                            <br>
                                        </span>
                                        <span>
                                            = {{ round($L6b[$input], 5) }} * 100% =
                                            <span class="fw-bold text-success">
                                                {{ round($L6b[$input] * 100, 2) }}%
                                            </span>
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Hasil --}}
            <div class="container" data-aos="fade-up">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="card mb-3" style="width: 800px; padding: 20px">
                        <div class="card-body">
                            <h2>
                                Solusi yang kami rekomendasikan:
                            </h2>
                            @php $nama = $solusi['pupuk'] @endphp
                            <div class="alert alert-info" role="alert">
                                Berdasarkan perhitungan menggunakan naive bayes, pupuk yang paling direkomendasikan
                                untuk tanaman salak anda adalah <span class="fw-bold">{{ $namaPupuk[$nama] }}</span>
                                dengan nilai keyakinan <span class="fw-bold">{{ round($solusi['nilai'], 5) }}</span>
                                atau <span class="fw-bold">{{ round($solusi['nilai'] * 100, 2) }}%</span>
                            </div>

                            {{-- hasil alternatif --}}
                            @if ($alternatif !== null)
                                <br>
                                <p class="fw-bold">
                                    Berikut merupakan solusi alternatif dengan nilai keyakinan diatas 50% :
                                </p>

                                <div class="alert alert-info" role="alert">
                                    <ul>
                                        @foreach ($alternatif as $alt)
                                            @php $nama = $alt['pupuk'] @endphp
                                            <li>
                                                <span class="fw-bold">{{ $namaPupuk[$nama] }}</span> dengan nilai
                                                keyakinan <span class="fw-bold">{{ round($alt['nilai'], 5) }}</span>
                                                atau <span class="fw-bold">{{ round($alt['nilai'] * 100, 2) }}%</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            {{-- Petunjuk Pemakaian --}}
            <div class="container" data-aos="fade-up">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="card mb-3" style="width: 800px; padding: 20px">
                        <div class="card-body">
                            @php $nama = $solusi['pupuk'] @endphp
                            <h2>
                                Petunjuk Pemakaian Pupuk {{ $namaPupuk[$nama] }}:
                            </h2>

                            {{-- youtube wire:video player --}}
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/{{ $videoID[$nama] }}"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>

                            <div class="alert alert-success" role="alert">
                                <ul>
                                    @foreach ($solusi['petunjuk'] as $key => $value)
                                        <li>
                                            <h5 class="fw-bold">{{ $key }}</h5>
                                        </li>
                                        <li style="list-style-type: none;">
                                            <p>{{ $value }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Petunjuk Pemakaian Alternatif --}}
            @if ($alternatif !== null)
                @foreach ($alternatif as $alt)
                    <div class="container" data-aos="fade-up">
                        <div class="h-100 d-flex align-items-center justify-content-center">
                            <div class="card mb-3" style="width: 800px; padding: 20px">
                                <div class="card-body">
                                    @php $nama = $alt['pupuk'] @endphp
                                    <h2>
                                        Petunjuk Pemakaian Pupuk {{ $namaPupuk[$nama] }}:
                                    </h2>

                                    {{-- youtube wire:video player --}}
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/{{ $videoID[$nama] }}"
                                            title="YouTube video player"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                    </div>

                                    <div class="alert alert-success" role="alert">
                                        <ul>
                                            @foreach ($alt['petunjuk'] as $key => $value)
                                                <li>
                                                    <h5 class="fw-bold">{{ $key }}</h5>
                                                </li>
                                                <li style="list-style-type: none;">
                                                    <p>{{ $value }}</p>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        @else
            {{-- Informasi User --}}
            <div class="container" data-aos="fade-up">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="card mb-3" style="width: 800px; padding: 20px">
                        <div class="card-body">
                            <h2 class="mb-3"> Informasi Pengguna : </h2>
                            {{-- <ul>
                                @foreach ($listJawaban as $jawaban)
                                    <li class="fs-5">{{ $jawaban }}</li>
                                @endforeach
                            </ul> --}}
                            @php $userData = session('userData'); @endphp
                            <div class="alert alert-warning" role="alert">
                                <table class="table-warning">
                                    <tbody>
                                        <tr>
                                            <th>Nama</th>
                                            <th>:</th>
                                            <th class="fw-normal">{{ $userData->nama }}</th>
                                        </tr>
                                        <tr>
                                            <th>Umur</th>
                                            <th>:</th>
                                            <th class="fw-normal">{{ $userData->umur }}</th>
                                        </tr>
                                        <tr>
                                            <th>Pekerjaan </th>
                                            <th>:</th>
                                            <th class="fw-normal">{{ $userData->pekerjaan }}</th>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <th>:</th>
                                            <th class="fw-normal">{{ $userData->alamat }}</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- User Input --}}
            <div class="container" data-aos="fade-up">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="card mb-3" style="width: 800px; padding: 20px">
                        <div class="card-body">
                            <h2 class="mb-3"> Berdasarkan gejala yang anda pilih berikut : </h2>
                            <ul>
                                @foreach ($listJawaban as $jawaban)
                                    <li class="fs-5">{{ $jawaban }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Hasil --}}
            <div class="container" data-aos="fade-up">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="card mb-3" style="width: 800px; padding: 20px">
                        <div class="card-body">
                            <h2>
                                Solusi yang kami rekomendasikan:
                            </h2>
                            @php $nama = $solusi['pupuk'] @endphp
                            <div class="alert alert-info" role="alert">
                                Berdasarkan perhitungan menggunakan naive bayes, pupuk yang paling direkomendasikan
                                untuk tanaman salak anda adalah <span class="fw-bold">{{ $namaPupuk[$nama] }}</span>
                                dengan nilai keyakinan <span class="fw-bold">{{ round($solusi['nilai'], 5) }}</span>
                                atau <span class="fw-bold">{{ round($solusi['nilai'] * 100, 2) }}%</span>
                            </div>

                            {{-- hasil alternatif --}}
                            @if ($alternatif !== null)
                                <br>
                                <p class="fw-bold">
                                    Berikut merupakan solusi alternatif dengan nilai keyakinan diatas 50% :
                                </p>

                                <div class="alert alert-info" role="alert">
                                    <ul>
                                        @foreach ($alternatif as $alt)
                                            @php $nama = $alt['pupuk'] @endphp
                                            <li>
                                                <span class="fw-bold">{{ $namaPupuk[$nama] }}</span> dengan nilai
                                                keyakinan <span class="fw-bold">{{ round($alt['nilai'], 5) }}</span>
                                                atau <span class="fw-bold">{{ round($alt['nilai'] * 100, 2) }}%</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            {{-- Petunjuk Pemakaian --}}
            <div class="container" data-aos="fade-up">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <div class="card mb-3" style="width: 800px; padding: 20px">
                        <div class="card-body">
                            @php $nama = $solusi['pupuk'] @endphp
                            <h2>
                                Petunjuk Pemakaian Pupuk {{ $namaPupuk[$nama] }}:
                            </h2>

                            {{-- youtube wire:video player --}}
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/{{ $videoID[$nama] }}"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>

                            <div class="alert alert-success" role="alert">
                                <ul>
                                    @foreach ($solusi['petunjuk'] as $key => $value)
                                        <li>
                                            <h5 class="fw-bold">{{ $key }}</h5>
                                        </li>
                                        <li style="list-style-type: none;">
                                            <p>{{ $value }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Petunjuk Pemakaian Alternatif --}}
            @if ($alternatif !== null)
                @foreach ($alternatif as $alt)
                    <div class="container" data-aos="fade-up">
                        <div class="h-100 d-flex align-items-center justify-content-center">
                            <div class="card mb-3" style="width: 800px; padding: 20px">
                                <div class="card-body">
                                    @php $nama = $alt['pupuk'] @endphp
                                    <h2>
                                        Petunjuk Pemakaian Pupuk {{ $namaPupuk[$nama] }}:
                                    </h2>

                                    {{-- youtube wire:video player --}}
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/{{ $videoID[$nama] }}"
                                            title="YouTube video player"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                    </div>

                                    <div class="alert alert-success" role="alert">
                                        <ul>
                                            @foreach ($alt['petunjuk'] as $key => $value)
                                                <li>
                                                    <h5 class="fw-bold">{{ $key }}</h5>
                                                </li>
                                                <li style="list-style-type: none;">
                                                    <p>{{ $value }}</p>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        @endif

    </section><!-- /Starter Section Section -->

</main>
