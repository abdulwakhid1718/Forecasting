<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}assets/css/adminlte.min.css">
    <!-- My style -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}assets/css/style1.css">
    <script src="https://kit.fontawesome.com/c9c55908e1.js" crossorigin="anonymous"></script>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-bold">Forecast Harga Saham</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ env('APP_URL') }}assets/img/avatar5.png" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-capitalize">Admin</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/data-aktual" class="nav-link">
                                <i class="nav-icon fa-solid fa-table"></i>
                                <p>
                                    Data Aktual
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/hasil-forecast" class="nav-link">
                                <i class="nav-icon fas fa-gear"></i>
                                <p>
                                    Forecasting
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/ramal-next" class="nav-link">
                                <i class="nav-icon fas fa-calculator"></i>
                                <p>
                                    Forecasting Selanjutnya
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/profil" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Profil
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <br>
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 Kelompok 13</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ env('APP_URL') }}plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ env('APP_URL') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ env('APP_URL') }}plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ env('APP_URL') }}assets/js/adminlte.js"></script>

    <!-- PAGE {{ env('APP_URL') }}PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ env('APP_URL') }}plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="{{ env('APP_URL') }}plugins/raphael/raphael.min.js"></script>
    <script src="{{ env('APP_URL') }}plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ env('APP_URL') }}plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ env('APP_URL') }}assets/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ env('APP_URL') }}assets/js/pages/dashboard2.js"></script>
    <!-- jQuery -->
    <script src="{{ env('APP_URL') }}plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ env('APP_URL') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>
    <!-- DataTables  & {{ env('APP_URL') }}Plugins -->
    <script src="{{ env('APP_URL') }}plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ env('APP_URL') }}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ env('APP_URL') }}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ env('APP_URL') }}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ env('APP_URL') }}plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ env('APP_URL') }}plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ env('APP_URL') }}plugins/jszip/jszip.min.js"></script>
    <script src="{{ env('APP_URL') }}plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ env('APP_URL') }}plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ env('APP_URL') }}plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ env('APP_URL') }}plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ env('APP_URL') }}plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
            $('#example3').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
            $('#example4').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
            $('#example5').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example5_wrapper .col-md-6:eq(0)');
            $('#example6').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example6_wrapper .col-md-6:eq(0)');
            $('#example7').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example7_wrapper .col-md-6:eq(0)');
            $('#example8').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example8_wrapper .col-md-6:eq(0)');
            $('#example9').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example9_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        const checkboxes = document.querySelectorAll(".checkbox-size");
        const inputs = document.querySelectorAll(".inp-stok");

        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener("change", function() {
                if (this.checked) {
                    inputs[index].disabled = false;
                    inputs[index].value = 1;
                } else {
                    inputs[index].disabled = true;
                    inputs[index].value = '';
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#jenis_input').change(function() {
                var selectedOption = $(this).val();
                if (selectedOption === 'select') {
                    $('.additional-input').remove(); // Menghapus inputan tambahan yang sudah ada sebelumnya
                    var formGroup = $('<div>').addClass('form-group additional-input');
                    var label = $('<label>').attr('for', 'nilai_ganda_input').text('Nilai');
                    var info = $('<code>').text(
                        "* berikan tanda '->' untuk memisahkan bobot dengan nilai dan ',' untuk memisahkan nilai gandanya contoh : SD->4,SMP->3,SMA->1"
                    )
                    var input = $('<textarea>').attr({
                        class: 'form-control',
                        id: 'nilai_ganda_input',
                        name: 'nilai_ganda_input',
                        placeholder: 'Masukkan Nilai Ganda'
                    });
                    formGroup.append(label, "<br>", info,
                        input); // Menambahkan label dan inputan ke form group tambahan
                    $('.form-group:last').after(
                        formGroup); // Menambahkan form group tambahan setelah form group terakhir
                } else {
                    $('.additional-input').remove(); // Menghapus inputan tambahan jika opsi lain dipilih
                }
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            // Mendengarkan peristiwa click pada elemen dengan kelas .btn-primary
            $('.btn-tambah-stok').click(function() {
                var uk = $(this).data('ukuran');

                // Menempatkan data ke dalam elemen dengan id dataModal
                $('#dataUkuran').val(uk);
            });
        });
    </script>
    <script>
        $(document).ready(() => {
            $('#ubah-produk').click(() => {
                $('#submitproduk').prop('disabled', false);
                $('.form-group input').prop('disabled', false);
                $('.form-group select').prop('disabled', false);
                $('.form-group textarea').prop('disabled', false);

                $('#ubah-produk').prop('disabled', true);
            })
        })
    </script>
</body>

</html>
