<div class="container" data-aos="fade-up">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="card" style="max-width: 800px; padding: 20px">
            <div class="card-body">
                <form wire:submit.prevent='analyze' action="#">
                    {{-- 1 --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-8">
                            <label class="form-label">
                                1. Kondisi tanah kurang subur, sedikit bahan organik
                            </label>
                        </div>
                        <div class="col-4">
                            <select wire:model='g01'name="g01" class="form-select" required>
                                <option value="null" selected="true" disabled="disabled">
                                    -- Pilih Jawaban --
                                </option>
                                <option value="1">Iya</option>
                                <option value="0.5">Mungkin</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <hr class="my-4">
                    {{-- 2 --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-8">
                            <label class="form-label">
                                2. Tanaman dalam fase vegetatif (daun, batang)
                            </label>
                        </div>
                        <div class="col-4">
                            <select wire:model='g02'name="g02" class="form-select" required>
                                <option value="null" selected="true" disabled="disabled">
                                    -- Pilih Jawaban --
                                </option>
                                <option value="1">Iya</option>
                                <option value="0.5">Mungkin</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <hr class="my-4">
                    {{-- 3 --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-8">
                            <label class="form-label">
                                3. Tanaman dalam fase generatif (bunga, buah)
                            </label>
                        </div>
                        <div class="col-4">
                            <select wire:model='g03'name="g03" class="form-select" required>
                                <option value="null" selected="true" disabled="disabled">
                                    -- Pilih Jawaban --
                                </option>
                                <option value="1">Iya</option>
                                <option value="0.5">Mungkin</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <hr class="my-4">
                    {{-- 4 --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-8">
                            <label class="form-label">
                                4. Musim hujan
                            </label>
                        </div>
                        <div class="col-4">
                            <select wire:model='g04'name="g04" class="form-select" required>
                                <option value="null" selected="true" disabled="disabled">
                                    -- Pilih Jawaban --
                                </option>
                                <option value="1">Iya</option>
                                <option value="0.5">Mungkin</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <hr class="my-4">
                    {{-- 5 --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-8">
                            <label class="form-label">
                                5. Musim kemarau
                            </label>
                        </div>
                        <div class="col-4">
                            <select wire:model='g05'name="g05" class="form-select" required>
                                <option value="null" selected="true" disabled="disabled">
                                    -- Pilih Jawaban --
                                </option>
                                <option value="1">Iya</option>
                                <option value="0.5">Mungkin</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <hr class="my-4">
                    {{-- 6 --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-8">
                            <label class="form-label">
                                6. Hasil panen rendah
                            </label>
                        </div>
                        <div class="col-4">
                            <select wire:model='g06'name="g06" class="form-select" required>
                                <option value="null" selected="true" disabled="disabled">
                                    -- Pilih Jawaban --
                                </option>
                                <option value="1">Iya</option>
                                <option value="0.5">Mungkin</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <hr class="my-4">
                    {{-- 7 --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-8">
                            <label class="form-label">
                                7. Hasil panen tinggi
                            </label>
                        </div>
                        <div class="col-4">
                            <select wire:model='g07'name="g07" class="form-select" required>
                                <option value="null" selected="true" disabled="disabled">
                                    -- Pilih Jawaban --
                                </option>
                                <option value="1">Iya</option>
                                <option value="0.5">Mungkin</option>
                                <option value="0">Tidak</option>
                                {{-- <option value="1">Meningkat tajam dibandingkan musim lalu</option>
                                <option value="0.5">Sedikit meningkat dibandingkan musim lalu</option>
                                <option value="0">Sama seperti musim lalu</option> --}}
                            </select>
                        </div>
                    </div>
                    <hr class="my-4">
                    {{-- 8 --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-8">
                            <label class="form-label">
                                8. Daun menguning
                            </label>
                        </div>
                        <div class="col-4">
                            <select wire:model='g08'name="g08" class="form-select" required>
                                <option value="null" selected="true" disabled="disabled">
                                    -- Pilih Jawaban --
                                </option>
                                <option value="1">Iya</option>
                                <option value="0.5">Mungkin</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <hr class="my-4">
                    {{-- 9 --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-8">
                            <label class="form-label">
                                9. Daun rontok
                            </label>
                        </div>
                        <div class="col-4">
                            <select wire:model='g09'name="g09" class="form-select" required>
                                <option value="null" selected="true" disabled="disabled">
                                    -- Pilih Jawaban --
                                </option>
                                <option value="1">Iya</option>
                                <option value="0.5">Mungkin</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <hr class="my-4">
                    {{-- 10 --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-8">
                            <label class="form-label">
                                10. Buah kecil dan tidak berkembang
                            </label>
                        </div>
                        <div class="col-4">
                            <select wire:model='g10'name="g10" class="form-select" required>
                                <option value="null" selected="true" disabled="disabled">
                                    -- Pilih Jawaban --
                                </option>
                                <option value="1">Iya</option>
                                <option value="0.5">Mungkin</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <hr class="my-4">
                    {{-- 11 --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-8">
                            <label class="form-label">
                                11. Akar tanaman busuk
                            </label>
                        </div>
                        <div class="col-4">
                            <select wire:model='g11'name="g11" class="form-select" required>
                                <option value="null" selected="true" disabled="disabled">
                                    -- Pilih Jawaban --
                                </option>
                                <option value="1">Iya</option>
                                <option value="0.5">Mungkin</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <hr class="my-4">
                    {{-- 12 --}}
                    <div class="row mb-4 align-items-center">
                        <div class="col-8">
                            <label class="form-label">
                                12. Tanda serangan hama (lubang di daun)
                            </label>
                        </div>
                        <div class="col-4">
                            <select wire:model='g12'name="g12" class="form-select" required>
                                <option value="null" selected="true" disabled>
                                    -- Pilih Jawaban --
                                </option>
                                <option value="1">Iya</option>
                                <option value="0.5">Mungkin</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <hr class="my-4">
                    {{-- Submit --}}
                    <div class="row text-center">
                        <div class="col">
                            <button type="submit" class="btn btn-success fw-bold fs-5">
                                Analyze
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
