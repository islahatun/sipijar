<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <?php foreach ($menu as $m) : ?>
                        <?php if ($m['id_parrent'] == 1) { ?>
                            <a class="nav-link" href="<?= base_url($m['url']) ?>">
                                <div class="sb-nav-link-icon"><i class="<?= $m['icon'] ?>"></i></div>
                                <?= $m['menu'] ?>
                            </a>
                        <?php } else { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <div class="sb-nav-link-icon"><i class="<?= $m['icon'] ?>"></i></div> <?= $m['menu'] ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url('Operator/list_pns') ?>">Daftar PNS</a>
                                    <a class="dropdown-item" href="<?= base_url('Operator/list_operator') ?>">Dafttar Operator</a>
                                    <a class="dropdown-item" href="<?= base_url('Operator/list_pimpinan') ?>">Daftar Pimpinan</a>
                                </div>
                            </li>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?= $session['level'] ?>
            </div>
        </nav>
    </div>