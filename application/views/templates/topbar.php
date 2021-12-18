<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <!-- <h3 class="text-center font-weight-light my-4">
        <img src="<?= base_url('assets/Logo_kabupaten_serang.png') ?>" style="width: 100px;">
    </h3> -->
    <a class="navbar-brand ps-3" href="index.html">SIPIJAR</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

    <!-- Navbar-->
    <ul class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="row">
            <div class="col">
                <a class="nav-link " role="button" aria-expanded="false"><?= $session['nama'] ?> </a>
            </div>
            <div class="col">
                <!-- <a class="nav-link " role="button" aria-expanded="false"><?= $session['nama'] ?> </a>  -->
                <a class="text-primary btn btn-info" href="<?= base_url('Auth') ?>">
                    <!-- <i class="fas fa-sign-out-alt text-primary"></i> --> Logout
                </a>
            </div>
        </div>


    </ul>
</nav>