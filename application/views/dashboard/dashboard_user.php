<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="ml-3">
                <h1 class="">Selamat Datang <?= $session['nama'] ?></h1>
                <?= $this->session->flashdata('message') ?>
            </div>

            <div class="card ">
                <div class="card-body">
                    Selamat datang di Website Sistem Informasi Pembuatan Surat Izin Belajar
                    <p>Kepada Calon Pengaju Harap Untuk Mempersiapkan :</p>
                    <p>1. Scan Surat Keterangan Rekomendasi dari masing masing insatansi </p>
                    <p>2. Scan Surat Keterangan PNS </p>
                    <p>3. Scan Jadwal Perkuliahan </p>
                    <p>4. Scan SK Akreditasi Universitas</p>

                    <div class="col">
                        <?php if ($cetak['status'] == 'Acc') { ?>
                            <a target="blank" href="<?= base_url('pengajuan/suratpdf') ?>" class="btn btn-primary">Download</a>
                        <?php } else { ?>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
</div>
</main>