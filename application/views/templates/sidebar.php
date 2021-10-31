<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <?php foreach ($menu as $m) : ?>
                        <a class="nav-link" href="<?= base_url($m['url']) ?>">
                            <div class="sb-nav-link-icon"><i class="<?= $m['icon'] ?>"></i></div>
                            <?= $m['menu'] ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?= $session['level'] ?>
            </div>
        </nav>
    </div>