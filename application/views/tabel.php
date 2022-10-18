<div class="container pt-5">
    <div class="card p-5">
        <div class="text-center">
            <h2>Tabel Pendaftaran</h2>
        </div>
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Tanggal Lahir</th>
                        </th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Agama</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $nim; ?></td>
                        <td><?php echo $kelas; ?></td>
                        <td><?php echo $tanggal_lahir; ?></td>
                        <td><?php echo $tempat_lahir; ?></td>
                        <td><?php echo $alamat; ?></td>
                        <td><?php echo $jenkel; ?></td>
                        <td><?php echo $agama; ?></td>

                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>