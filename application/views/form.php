<div class="container pt-5">
    <div class="card p-5">
        <div class="text-center">
            <h2>Form Pendaftaran</h2>
        </div>
        <div class="card-body">

            <form method="POST" action="<?php echo base_url() . 'Contrl_dilemas/tabel' ?>">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama">

                </div>
                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" class="form-control" name="nim">

                </div>
                <div class="mb-3">
                    <label class="form-label">Kelas</label>

                    <select class="form-select" aria-label="Default select example" name="kelas">
                        <option value="12.3A.21">12.3A.21</option>
                        <option value="12.3B.21">12.3B.21</option>
                    </select>

                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">

                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir">

                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat">

                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenkel" value="Laki-laki">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenkel" value="Perempuan">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <select class="form-select" aria-label="Default select example" name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                    </select>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>