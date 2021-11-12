<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> -->
    <!-- css datatables -->

    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>DataTables/DataTables-1.11.3/css/dataTables.bootstrap4.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


    <script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.bundle.js"></script>

    <!-- DaataTables -->
    <script src="<?= base_url('assets/') ?>DataTables/DataTables-1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/') ?>DataTables/DataTables-1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <!-- Memanggil Data Tables -->
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
</head>

<body class="sb-nav-fixed">