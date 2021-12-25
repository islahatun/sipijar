<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Document</title>
    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
</head>

<body>
    <div class="container ml-4">
        <div class="ml-4">
            <table class="mt-4 pr-5 " border="3">
                <tr>
                    <td width="30"></td>
                    <td>
                        <img src="<?= base_url('assets/Logo_kabupaten_serang.png') ?>" style="width: 80px;">
                    </td>
                    <td width="50"></td>
                    <td>
                        <p class="text-center ">
                        <h4 class="text-center "><B>DINAS PEMERINTAHAN KABUPATEN SERANG</b></h4>
                        Jl. Jenderal Sudirman No. 5, Kota Serang Banten 42122
                        </p>

                    </td>
                    <td width="50"></td>
                </tr>
            </table rules="rows">
            <hr>
            <h4>
                <p class="text-center"><B><U>SURAT IZIN BELAJAR</U></B></p>
            </h4>
            <div>
                <p class="text-center text-justify">NOMOR : <?= $cetak['no_surat'] ?></p>
                <p>Sehubungan surat dari Kepala Bidang Diklat BKPSDM Kota Serang dengan Nomor Rekomendasi <?= $cetak['no_sk'] ?>, Kepala Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kota Serang memberi ijin kepada Pegawai Negeri Sipil, atas :</p>
            </div>

            <div class="row">
                <div class="col-2">
                    Nama
                </div>
                <div class="col-10">
                    : <?= $cetak['nama'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    NIP
                </div>
                <div class="col-10">
                    : <?= $cetak['nip'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    Pangkat/ Gol
                </div>
                <div class="col-10">
                    : <?= $cetak['gol'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    Jabatan
                </div>
                <div class="col-10">
                    : <?= $cetak['unit_kerja'] ?>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    Unit Kerja
                </div>
                <div class="col-10">
                    : <?= $cetak['unit_kerja'] ?>
                </div>
            </div>
            <br>
            <p class="text-justify">Untuk mengikuti perkuliahan Program Pendidikan <?= $cetak['jenjang_pendidikan'] ?> Jurusan <?= $cetak['program_kuliah'] ?> pada <?= $cetak['instansi_pendidikan'] ?>.
                Dengan ketentuan :
            </p>
            <ul class="text-justify">
                1. Ijin belajar ini diberikan diluar jam kerja;<br>
                2. Tidak mengganggu tugas-tugas kedinasan;<br>
                3. Biaya pendidikan ditanggung sepenuhnya oleh yang bersangkutan;<br>
                4. Tidak akan menuntut penyesuaian ijazah;<br>
                5. Ijin belajar ini dinyatakan tidak berlaku apabila :<br>
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">
                        a.
                    </div>
                    <div class="col-10 text-justify">
                        Dalam proses belajar mengajar yang ditempuh oleh yang bersangkutan ternyata melanggar ketentuan standar dan norma akademik berdasarkan peraturan perundang-undangan yang berlaku;
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">
                        b.
                    </div>
                    <div class="col-10 text-justify">
                        Dikemudian hari terbukti perolehan ijazah tanda kelulusannya melanggar ketentuan perundang-undangan yang berlaku.
                    </div>
                </div>
                6. Pelanggaran dalam cara memperoleh dan kepemilikan ijazah secara tidak sah akan dikenai sanksi menurut perundang-undangan yang berlaku.<br>
            </ul>
            <p class="text-justify">Demikian surat ijin belajar ini dibuat agar dipergunakan sebagaimana mestinya.</p>
            <table>
                <tr>
                    <td width=" 300">
                    </td>
                    <td>
                        <p class="text-end"><?= date('D-M-Y') ?></p>
                        <p class="text-center">KEPALA BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA
                            KOTA SERANG
                        </p>
                        <p class="text-center">
                            <?php

                            $pimpinan = "SELECT nama FROM m_pimpinan";
                            $p = $this->db->query($pimpinan)->row_array();
                            // generete qrcode
                            $params['data'] = $p;
                            $params['level'] = 'H';
                            $params['size'] = 5;
                            $params['savename'] = FCPATH . 'tes.png';
                            $this->ciqrcode->generate($params);

                            echo '<img src="' . base_url() . 'tes.png" />';

                            ?>
                        </p>
                        <?php
                        $pimpinan = "SELECT * FROM m_pimpinan";
                        $p = $this->db->query($pimpinan)->row_array();
                        ?>
                        <p class="text-center">
                            <?= $p['nama'] ?><br>
                            <?= $p['nip'] ?>
                        </p>
                    </td>
                </tr>
            </table>

        </div>
    </div>
    </div>
    </div>
</body>
<script>
    window.print();
</script>

</html>