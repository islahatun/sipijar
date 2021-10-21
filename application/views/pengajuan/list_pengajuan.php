<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <table class="table table-bordered mt-3">
                <thead>
                    <tr class="text-center">
                        <th scope="col">NO</th>
                        <th scope="col">NIP</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">DETAIL</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">KOMENTAR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($pengajuan as $p); ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $p['nip'] ?></td>
                        <td><?= $p['nama'] ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('Pengajuan/detail_pengajuan/' . $p['id_pengajuan']) ?>" class="btn btn-primary"><i class="fas fa-file-alt"></i> Lihat Dokumen</a>
                        </td>
                        <td><?= $p['status'] ?></td>
                        <td><?= $p['komentar'] ?></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </main>