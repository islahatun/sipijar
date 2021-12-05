<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <div class="card text-dark bg-light mb-3 mt-3">
                <div class="card-header">Daftar Pengajuan Acc</div>
                <div class="row">

                    <div class="col-4 mt-3 ml-3">
                        <?= $this->session->flashdata('message') ?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="<?= base_url('Pengajuan/pdf') ?>" target="blank" class="btn btn-primary"><i class="fas fa-print"></i> Print Laporan</a>
                    </div>

                    <table id="table" class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">NO</th>

                                <th scope="col">NIP</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">DOKUMEN</th>
                                <th scope="col">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($pengajuan as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $p['nip'] ?></td>
                                    <td><?= $p['nama'] ?></td>
                                    <td>
                                        <a target="blank" href="<?= base_url('Pengajuan/cetak/') . $p['id_pengajuan'] ?>" <?= $p['id_pengajuan'] ?>>Cetak</a>
                                    </td>
                                    <!-- <td class="text-center"><button class="btn btn-primary" data-toggle="modal" data-target="#dokumen" <?= $p['id_pengajuan'] ?>>
                                            <i class="far fa-file-alt"></i>
                                        </button>
                                    </td> -->
                                    <td class="text-center">
                                        <?php if ($p['komentar'] == 'Acc') { ?>
                                            <div>
                                                <button class="btn btn-success" disabled><i class="fas fa-check"></i></button>
                                            </div>
                                        <?php } else { ?>
                                            <form action="<?= base_url('Pengajuan/accPimpinan/' . $p['id_pengajuan']) ?>" method="post">
                                                <input type="text" value="<?= $p['id_pengajuan'] ?>" hidden>
                                                <input type="text" value="Acc" name="komentar" hidden>
                                                <input type="text" value="Acc" name="status" hidden>
                                                <button class="btn btn-primary">Acc</button>
                                            </form>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <!-- <table id="table" class="table table-bordered mt-3 table-responsive-sm">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">NO</th>
                                <th scope="col">NIP</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($pengajuan as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $p['nip'] ?></td>
                                    <td><?= $p['nama'] ?></td>
                                    <td class="text-center">
                                        <?php if ($p['komentar'] == 'Acc') { ?>
                                            <div>
                                                <button class="btn btn-success" disabled><i class="fas fa-check"></i></button>
                                            </div>
                                        <?php } else { ?>
                                            <form action="<?= base_url('Pengajuan/accPimpinan/' . $p['id_pengajuan']) ?>" method="post">
                                                <input type="text" value="<?= $p['id_pengajuan'] ?>" hidden>
                                                <input type="text" value="Acc" name="komentar" hidden>
                                                <input type="text" value="Acc" name="status" hidden>
                                                <button class="btn btn-primary">Acc</button>
                                            </form>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table> -->
                </div>
            </div>
    </main>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dokumen">
        Launch demo modal
    </button> -->
    <?php foreach ($pengajuan as $p) : ?>
        <!-- Modal -->
        <div class="modal fade" id="dokumen" <?= $p['id_pengajuan'] ?> tabindex="-1" aria-labelledby="komentarLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="ml-2">
                            <h4>
                                <p class="text-center"><B><U>SURAT IZIN BELAJAR</U></B></p>
                            </h4>
                            <p class="text-center">NOMOR : 826.5/<?= $p['id_pengajuan'] ?>-Diklat/BKPSDM/<?= date('Y') ?></p>
                            <p>Sehubungan surat dari Kepala Bidang Diklat BKPSDM Kota Serang dengan Nomor Rekomendasi <?= $p['no_sk'] ?> tanggal 16 November 2020, Kepala Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kota Serang memberi ijin kepada Pegawai Negeri Sipil, atas :</p>
                            <div class="row">
                                <div class="col-2">
                                    Nama
                                </div>
                                <div class="col-10">
                                    : <?= $p['nama'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    NIP
                                </div>
                                <div class="col-10">
                                    : <?= $p['nip'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    Pangkat/ Gol
                                </div>
                                <div class="col-10">
                                    : <?= $p['gol'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    Jabatan
                                </div>
                                <div class="col-10">
                                    : <?= $p['unit_kerja'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    Unit Kerja
                                </div>
                                <div class="col-10">
                                    : <?= $p['unit_kerja'] ?>
                                </div>
                            </div>
                            <br>
                            <p>Untuk mengikuti perkuliahan Program Pendidikan Strata-1 (S-1) Jurusan Teknik Informatika pada Universitas Banten Jaya - Serang.
                                Dengan ketentuan :
                            </p>
                            <ul>
                                1. Ijin belajar ini diberikan diluar jam kerja;<br>
                                2. Tidak mengganggu tugas-tugas kedinasan;<br>
                                3. Biaya pendidikan ditanggung sepenuhnya oleh yang bersangkutan;<br>
                                4. Tidak akan menuntut penyesuaian ijazah;<br>
                                5. Ijin belajar ini dinyatakan tidak berlaku apabila :<br>
                                <div class="row">
                                    <div class="col-1">

                                    </div>
                                    <div class="col-1">
                                        a.
                                    </div>
                                    <div class="col">
                                        Dalam proses belajar mengajar yang ditempuh oleh yang bersangkutan ternyata melanggar ketentuan standar dan norma akademik berdasarkan peraturan perundang-undangan yang berlaku;
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">

                                    </div>
                                    <div class="col-1">
                                        b.
                                    </div>
                                    <div class="col">
                                        Dikemudian hari terbukti perolehan ijazah tanda kelulusannya melanggar ketentuan perundang-undangan yang berlaku.
                                    </div>
                                </div>
                                6. Pelanggaran dalam cara memperoleh dan kepemilikan ijazah secara tidak sah akan dikenai sanksi menurut perundang-undangan yang berlaku.<br>
                            </ul>
                            <p>Demikian surat ijin belajar ini dibuat agar dipergunakan sebagaimana mestinya.</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>