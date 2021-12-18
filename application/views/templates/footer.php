<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; SIPIJAR 2021</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>js/scripts.js"></script>
<!-- <script src="<?= base_url('assets/') ?>Chart.min.js"></script> -->
<!-- <script src="<?= base_url('assets/') ?>assets/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/') ?>assets/demo/chart-bar-demo.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script> -->
<!-- <script src="<?= base_url('asssets/') ?>js/datatables-simple-demo.js"></script> -->

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });

    $('#id_unit').select2({
        theme: "bootstrap-5"
    });
    $('#jabatan').select2({
        theme: "bootstrap-5",
    });
</script>
</body>

</html>