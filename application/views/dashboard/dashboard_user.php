<div id="layoutSidenav_content">
    <main>
        <div class="mr-3">
            <h1>Selamat Datang <?= $session['nama'] ?></h1>
            <?= $this->session->flashdata('message') ?>
        </div>

</div>
</main>