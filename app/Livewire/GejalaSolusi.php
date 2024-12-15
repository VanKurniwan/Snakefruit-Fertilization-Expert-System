<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Userdata;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\RepresentasiPengetahuan;

#[Layout('components.layout')]
#[Title('SFES - Snakefruit Fertilization Expert System')]
class GejalaSolusi extends Component
{
    public $g01, $g02, $g03, $g04, $g0, $g05, $g06, $g07, $g08, $g09, $g10, $g11, $g12;
    public $L1, $L2, $L3, $L4a, $L4b, $L5, $L6a, $solusi, $alternatifSolusi;
    public $L6b = [];
    public $pupuk = [];
    public $videoTutor = [];
    public $listJawaban = [];

    public function mount()
    {
        $this->pupuk = [
            'p01' => 'Urea',
            'p02' => 'ZA (Zwavelzure Ammoniak)',
            'p03' => 'TSP (Triple Super Phosphate)',
            'p04' => 'KCI (Kalium Chloride)',
            'p05' => 'NPK (Nitrogen, Phosphor, Kalium)',
            'p06' => 'Pupuk Kandang',
            'p07' => 'Kompos',
            'p08' => 'Pupuk Hijau',
        ];

        $this->videoTutor = [
            'p01' => '-7qsgSgwEzM',
            'p02' => 'x-VlD9vxDtU',
            'p03' => 'aqYUN_VeOAM',
            'p04' => 'ZZUpWnnP0NI',
            'p05' => 'g6oLjdx8G_g',
            'p06' => 'j-IENZm-sEg',
            'p07' => '_acH-EorKIU',
            'p08' => '2GHkm2DT-CA',
        ];
    }

    public function analyze()
    {
        $inputs = [
            'g01' => $this->g01,
            'g02' => $this->g02,
            'g03' => $this->g03,
            'g04' => $this->g04,
            'g05' => $this->g05,
            'g06' => $this->g06,
            'g07' => $this->g07,
            'g08' => $this->g08,
            'g09' => $this->g09,
            'g10' => $this->g10,
            'g11' => $this->g11,
            'g12' => $this->g12
        ];

        $pertanyaan = [
            'g01' => 'Kondisi tanah kurang subur, sedikit bahan organik',
            'g02' => 'Tanaman dalam fase vegetatif (daun, batang)',
            'g03' => 'Tanaman dalam fase generatif (bunga, buah)',
            'g04' => 'Musim hujan',
            'g05' => 'Musim kemarau',
            'g06' => 'Hasil panen rendah',
            'g07' => 'Hasil panen tinggi',
            'g08' => 'Daun menguning',
            'g09' => 'Daun rontok',
            'g10' => 'Buah kecil dan tidak berkembang',
            'g11' => 'Akar tanaman busuk',
            'g12' => 'Tanda serangan hama (lubang di daun)'
        ];

        $petunjuk = [
            'p01' => [
                'Waktu Aplikasi' => 'Paling efektif digunakan saat fase vegetatif, ketika tanaman salak membutuhkan pertumbuhan daun dan batang yang maksimal',
                'Dosis'          => '100–200 gram per pohon, tergantung umur dan kondisi tanaman',
                'Cara Aplikasi'  => 'Taburkan pupuk urea sekitar 30–40 cm dari pangkal batang tanaman untuk menghindari kontak langsung dengan akar, lalu tutup dengan sedikit tanah agar nutrisi tidak mudah menguap',
                'Catatan'        => 'Jangan aplikasikan saat hujan deras karena urea mudah larut dan dapat tercuci oleh air',
            ],
            'p02' => [
                'Waktu Aplikasi' => 'Digunakan pada fase vegetatif atau saat daun tanaman terlihat menguning',
                'Dosis'          => '100–150 gram per pohon',
                'Cara Aplikasi'  => 'Sebarkan pupuk sekitar area akar, dengan jarak sekitar 20–30 cm dari batang tanaman. Pastikan pupuk tercampur sedikit dengan tanah',
                'Catatan'        => 'ZA mengandung sulfur yang bermanfaat bagi tanaman untuk memperkuat daya tahan terhadap kekeringan dan meningkatkan ketahanan terhadap hama',
            ],
            'p03' => [
                'Waktu Aplikasi' => 'Sebelum fase generatif atau ketika tanaman mulai berbunga',
                'Dosis'          => '100 gram per pohon',
                'Cara Aplikasi'  => 'Sebarkan TSP di sekeliling area akar tanaman dengan jarak 30–40 cm dari batang, lalu tutup dengan tanah agar terserap lebih baik',
                'Catatan'        => 'TSP membantu memperkuat akar dan merangsang pembungaan, serta meningkatkan produksi buah',
            ],
            'p04' => [
                'Waktu Aplikasi' => 'Pada fase generatif, terutama ketika tanaman mulai berbuah',
                'Dosis'          => '50–100 gram per pohon',
                'Cara Aplikasi'  => 'Taburkan KCl di sekitar area akar dengan jarak sekitar 20–30 cm dari batang. Sebaiknya ditutup sedikit dengan tanah',
                'Catatan'        => 'Kalium dalam KCl membantu pembentukan dan kualitas buah, serta memperkuat daya tahan tanaman terhadap penyakit',
            ],
            'p05' => [
                'Waktu Aplikasi' => 'Pada fase vegetatif maupun generatif, sebagai pemupukan tambahan atau rutin',
                'Dosis'          => '150–250 gram per pohon per aplikasi',
                'Cara Aplikasi'  => 'Taburkan NPK di sekitar area akar, dengan jarak 30 cm dari batang tanaman, dan campurkan sedikit ke dalam tanah',
                'Catatan'        => 'NPK membantu keseimbangan pertumbuhan tanaman karena mengandung nitrogen, fosfor, dan kalium',
            ],
            'p06' => [
                'Waktu Aplikasi' => 'Sebelum penanaman atau sebagai pupuk dasar setiap 6 bulan',
                'Dosis'          => '1–2 kg per pohon',
                'Cara Aplikasi'  => 'Taburkan di sekitar pangkal tanaman dan campurkan dengan tanah agar lebih mudah diserap akar',
                'Catatan'        => 'Pupuk kandang memperbaiki struktur tanah, menambah bahan organik, dan menyediakan unsur hara dalam jumlah yang stabil dan berkelanjutan',
            ],
            'p07' => [
                'Waktu Aplikasi' => 'Setiap 3–6 bulan sebagai pupuk dasar atau tambahan',
                'Dosis'          => '1–2 kg per pohon',
                'Cara Aplikasi'  => 'Sebarkan di sekitar tanaman dan campur dengan tanah agar lebih efektif',
                'Catatan'        => 'Kompos meningkatkan kualitas tanah dan menyediakan nutrisi secara bertahap',
            ],
            'p08' => [
                'Waktu Aplikasi' => 'Biasanya sebelum penanaman atau pada awal musim hujan',
                'Dosis'          => 'Tanaman hijau seperti kacang-kacangan ditanam di sekitar tanaman salak dan kemudian dibenamkan ke tanah saat sudah tumbuh',
                'Cara Aplikasi'  => 'Tanam tanaman hijau di lahan sekitar tanaman salak, biarkan tumbuh hingga fase vegetatif, lalu campurkan tanaman hijau tersebut ke dalam tanah sebagai bahan organik',
                'Catatan'        => 'Pupuk hijau membantu menambah bahan organik ke tanah dan mencegah erosi',
            ],
        ];

        // mendapatkan array jawaban ya
        $yes = [];
        foreach ($inputs as $input => $inputValue) {
            if ($inputValue != '0' && $inputValue != null) {
                $yes[$input] = $inputValue;
            }
        }
        // dd($yes);

        // mengisikan list jawaban untuk ditampilkan kepada user :
        foreach ($yes as $key => $value) {
            $this->listJawaban[$key] = $pertanyaan[$key];
        }
        // dd($this->listJawaban);

        // langkah 1 - mendefinisikan nilai probabilitas dari tiap evidence untuk tiap hipotesis berdasakan data sampel yang ada
        $nilaiBarisProbabilitas = [];
        foreach ($yes as $input => $inputValue) {
            // get row data
            $data = RepresentasiPengetahuan::getRowProbabilitas($input);
            // get filled collumn name
            $kumpulanNilaiProbabilitas = [];
            foreach ($data as $dataInput => $dataInputValue) {
                if (gettype($dataInputValue) == 'double') {
                    array_push($kumpulanNilaiProbabilitas, $dataInput);
                }
            }
            $nilaiBarisProbabilitas[$input] = $kumpulanNilaiProbabilitas;
        }

        // Mengelompokkan berdasarkan p0n
        $nilaiProbabilitas = [];
        foreach ($nilaiBarisProbabilitas as $input => $inputValues) {
            foreach ($inputValues as $pCode) {
                if (!isset($nilaiProbabilitas[$pCode])) {
                    $nilaiProbabilitas[$pCode] = [];
                }
                array_push($nilaiProbabilitas[$pCode], $input);
            }
        }

        // Mengurutkan key berdasarkan nilai numerik di dalamnya
        uksort($nilaiProbabilitas, function ($a, $b) {
            return (int)substr($a, 1) - (int)substr($b, 1);
        });

        // mengisikan value G berdasarkan database
        foreach ($nilaiProbabilitas as $input => $inputValue) {
            $newInputValue = [];
            foreach ($inputValue as $arrayG0n => $arrayG0nValue) {
                $GValue = RepresentasiPengetahuan::getNilaiProbabilitas($arrayG0nValue, $input);
                // dump($GValue);
                // $newInputValue[$arrayG0nValue] = $GValue;
                $newInputValue[$arrayG0nValue] = $GValue * (float)$inputs[$arrayG0nValue];
            }
            $nilaiProbabilitas[$input] = $newInputValue;
        }

        // dd($nilaiProbabilitas);

        // Hasil L1 untuk di print
        $this->L1 = $nilaiProbabilitas;
        // dump($nilaiProbabilitas);

        // langkah 2 - menjumlahkan nilai probabilitas tiap evidence untuk masing" hipotesis berdasarkan data sampel
        $jumlahNilaiProbabilitasTiapHipotesis = [];
        foreach ($nilaiProbabilitas as $input => $inputValue) {
            $total = 0;
            foreach ($inputValue as $listG => $GValue) {
                $total = $total + $GValue;
            }
            $jumlahNilaiProbabilitasTiapHipotesis[$input] = $total;
        }

        // Hasil L2 untuk print
        $this->L2 = $jumlahNilaiProbabilitasTiapHipotesis;
        // dump($jumlahNilaiProbabilitasTiapHipotesis);

        // langkah 3 - mencari nilai probabilitas hipotesis H tanpa memandang evidence apapun bagi masing"
        $nilaiProbabilitasHipotesisHTanpaMemandangEvidence = [];
        foreach ($nilaiProbabilitas as $input => $inputValue) {
            $newInputValue = [];
            foreach ($inputValue as $listG => $GValue) {
                $newGValue = $GValue / $jumlahNilaiProbabilitasTiapHipotesis[$input];
                $newInputValue[$listG] = $newGValue;
            }
            $nilaiProbabilitasHipotesisHTanpaMemandangEvidence[$input] = $newInputValue;
        }

        // Hasil L3 untuk print
        $this->L3 = $nilaiProbabilitasHipotesisHTanpaMemandangEvidence;
        // dd($nilaiProbabilitasHipotesisHTanpaMemandangEvidence);

        // langkah 4 - Mencari nilai probabilitas memandang evidence
        $perkalianNilaiProbabilitasMemandangEvidence = [];
        foreach ($nilaiProbabilitas as $input => $inputValue) {
            $newInputValue = [];
            foreach ($inputValue as $listG => $GValue) {
                $targetPerkalian = $nilaiProbabilitasHipotesisHTanpaMemandangEvidence[$input];
                $newGValue = $GValue * $targetPerkalian[$listG];
                $newInputValue[$listG] = $newGValue;
            }
            $perkalianNilaiProbabilitasMemandangEvidence[$input] = $newInputValue;
        }

        $nilaiProbabilitasMemandangEvidence = [];
        foreach ($perkalianNilaiProbabilitasMemandangEvidence as $input => $inputValue) {
            $total = 0;
            foreach ($inputValue as $listG => $GValue) {
                $total = $total + $GValue;
            }
            $nilaiProbabilitasMemandangEvidence[$input] = $total;
        }

        // Hasil L4 untuk print
        $this->L4a = $perkalianNilaiProbabilitasMemandangEvidence;
        // dump($perkalianNilaiProbabilitasMemandangEvidence);
        $this->L4b = $nilaiProbabilitasMemandangEvidence;
        // dump($nilaiProbabilitasMemandangEvidence);

        // langkah 5 - Mencari probabilitas hipotesis benar jika diberikan evidence E
        $probabilitasHipotesisBenarJikaDiberiE = [];
        foreach ($nilaiProbabilitas as $input => $inputValue) {
            $newInputValue = [];
            foreach ($inputValue as $listG => $GValue) {
                $targetPerkalian = $perkalianNilaiProbabilitasMemandangEvidence[$input];
                $newGValue = $GValue * $targetPerkalian[$listG] / $nilaiProbabilitasMemandangEvidence[$input];
                $newInputValue[$listG] = $newGValue;
            }
            $probabilitasHipotesisBenarJikaDiberiE[$input] = $newInputValue;
        }

        // Hasil L5 untuk print
        $this->L5 = $probabilitasHipotesisBenarJikaDiberiE;
        // dump($probabilitasHipotesisBenarJikaDiberiE);

        // langkah 6 - Mencari nilai kesimpulan dari teorema bayes
        $perkalianNilaiKesimpulan = [];
        foreach ($nilaiProbabilitas as $input => $inputValue) {
            $newInputValue = [];
            foreach ($inputValue as $listG => $GValue) {
                $targetPerkalian = $probabilitasHipotesisBenarJikaDiberiE[$input];
                $newGValue = $GValue * $targetPerkalian[$listG];
                $newInputValue[$listG] = $newGValue;
            }
            $perkalianNilaiKesimpulan[$input] = $newInputValue;
        }

        $nilaiKesimpulan = [];
        foreach ($perkalianNilaiKesimpulan as $input => $inputValue) {
            $total = 0;
            foreach ($inputValue as $listG => $GValue) {
                $total = $total + $GValue;
            }
            $nilaiKesimpulan[$input] = $total;
        }

        // Hasil L6 untuk print
        $this->L6a = $perkalianNilaiKesimpulan;
        // dump($perkalianNilaiKesimpulan);
        $this->L6b = $nilaiKesimpulan;
        // dump($nilaiKesimpulan);

        // SOLUSI
        $value = max($nilaiKesimpulan);
        $key = array_search($value, $nilaiKesimpulan);
        $highest = [
            'pupuk'     => $key,
            'nilai'     => $value,
            'petunjuk'  => $petunjuk[$key]
        ];

        // Hasil Solusi untuk print
        $this->solusi = $highest;
        // dump($this->solusi);

        // SOLUSI ALTERNATIF dengan nilai diatas 50%
        $nilaiKesimpulan = array_filter($nilaiKesimpulan, function ($value) {
            return $value >= 0.5;
        });
        arsort($nilaiKesimpulan);
        array_shift($nilaiKesimpulan);
        foreach ($nilaiKesimpulan as $key => $value) {
            $this->alternatifSolusi[$key] = [
                'pupuk'     => $key,
                'nilai'     => $value,
                'petunjuk'  => $petunjuk[$key]
            ];
        }

        // dump($nilaiKesimpulan);
        // dump($this->alternatifSolusi);

        // dd($yes);

        // Mengambil data user untuk ditampilkan jika user bukanlah admin
        if (session('username') !== 'Admin') {
            $userData = Userdata::where('username', session('username'))->first();;
            session()->flash('userData', $userData);
            // dd(session('userData'));
        }
    }

    public function render()
    {
        return view('livewire.gejala-solusi', [
            'L1'    => $this->L1,
            'L2'    => $this->L2,
            'L3'    => $this->L3,
            'L4a'   => $this->L4a,
            'L4b'   => $this->L4b,
            'L5'    => $this->L5,
            'L6a'   => $this->L6a,
            'L6b'   => $this->L6b,
            'solusi'    => $this->solusi,
            'alternatif'    => $this->alternatifSolusi,
            'namaPupuk' => $this->pupuk,
            'videoID' => $this->videoTutor,
            'listJawaban' => $this->listJawaban,
        ]);
    }
}