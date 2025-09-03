<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Perpus')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    {{-- CSS Libraries --}}
    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/morris.js/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet"
        href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

    <style>
        th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #3c8dbc;
            color: white;
            text-align: left;
        }
    </style>

    @stack('css')
</head>

<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">

        {{-- HEADER --}}
        <header class="main-header">
            <a href="{{ url('beranda') }}" class="logo">
                <span class="logo-mini"><b>P</b>RP</span>
                <span class="logo-lg"><b>PERPUSTAKAAN</b></span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="user-image"
                                    alt="User Image">
                                <span class="hidden-xs">AKUN</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle"
                                        alt="User Image">
                                    <p>Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">KELUAR</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        {{-- SIDEBAR --}}
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle"
                            alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Alexander Pierce</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <br>
                <ul class="sidebar-menu" data-widget="tree">
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>BERANDA</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i> <span>MASTER DATA</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('buku') }}"><i class="fa fa-book"></i> Data Buku</a></li>
                            <li><a href="{{ url('kategori') }}"><i class="fa fa-tags"></i> Data Kategori</a></li>
                            <li><a href="{{ url('anggota') }}"><i class="fa fa-users"></i> Data Anggota</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('penerbit') }}"><i class="fa fa-solid fa-list-ul"></i> <span>DATA
                                PENERBIT</span></a></li>
                    <li><a href="{{ url('transaksi') }}"><i class="fa fa-refresh"></i> <span>TRANSAKSI</span></a></li>
                    <li class="treeview">
                        <a href="{{ url('/') }}">
                            <i class="fa fa-book"></i> <span>LOG DATA</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('peminjaman') }}"><i class="fa fa-download"></i> Peminjaman</a></li>
                            <li><a href="{{ url('pengembalian') }}"><i class="fa fa-upload"></i> Pengembalian</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file-text"></i> <span>LAPORAN</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('pinjam') }}"><i class="fa fa-book"></i> Laporan Transaksi</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>

        {{-- CONTENT --}}
        <div class="content-wrapper">
            <section class="content-header">@yield('header')</section>
            <section class="content">
                <div class="row">
                    @yield('content')
                </div>
            </section>
        </div>

        {{-- FOOTER --}}
        <footer class="main-footer">
            <strong>&copy; 2025 <a href="#">REka</a>.</strong> CODING
        </footer>

        <div class="control-sidebar-bg"></div>
    </div>

    {{-- JS Libraries --}}
    <script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/morris.js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    <script>
        $(function() {
            $('#example1').DataTable();
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': true,
                'info': true,
                'autoWidth': true
            });
        });
    </script>

    @stack('js')
</body>

</html>
