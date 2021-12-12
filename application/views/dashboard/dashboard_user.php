<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="ml-3 mt-4">

                <?= $this->session->flashdata('alert') ?>
            </div>

            <div class="card ">
                <div class="card-body">
                    Selamat datang di Website Sistem Informasi Pembuatan Surat Izin Belajar
                    <p>Kepada Calon Pengaju Harap Untuk Mempersiapkan :</p>
                    <p>1. Scan Surat Keterangan Rekomendasi dari masing masing insatansi </p>
                    <p>2. Scan Surat Keterangan PNS </p>
                    <p>3. Scan Jadwal Perkuliahan </p>
                    <p>4. Scan SK Akreditasi Universitas</p>
                    <div class="small mb-2"><a href="<?= base_url('Assets/perwal/perwal_23_2010.pdf') ?>">Klik Untuk Melihat Peraturan Pengajuan Izin Belajar</a></div>
                    <div class="col">
                        <?php if ($cetak['status'] == 'Acc') { ?>
                            <a style="text-decoration: none" target="blank" href="<?= base_url('pengajuan/suratpdf') ?>" class="btn btn-primary btn-sm">Cetak Surat Izin Belajar</a>
                        <?php } else { ?>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </main>