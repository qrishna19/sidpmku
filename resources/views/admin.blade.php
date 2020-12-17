<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SIDPM</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link id="bootstrap-css" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> -->


</head>

<body>
    <div id="wrapper" class="active">

        <!-- Sidebar -->
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul id="sidebar_menu" class="sidebar-nav">
                <li class="sidebar-brand"><a id="menu-toggle" href="#"><span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
            </ul>
            <ul class="sidebar-nav" id="sidebar">
                <li><a href="/admin" class="text-center"><span class="sub_icon glyphicon glyphicon-home"></span><br />Dashboard</a></li>
                <li><a href="/" class="text-center"><span class="sub_icon glyphicon glyphicon-user"></span><br />User</a></li>
                <li><a href="/" class="text-center"><span class="sub_icon glyphicon glyphicon-floppy-disk"></span><br />Master Data</a></li>
                <li><a href="/kategori" class="text-center"><span class="sub_icon glyphicon glyphicon-th-large"></span><br />Kategori</a></li>
                <li><a href="/" class="text-center"><span class="sub_icon glyphicon glyphicon-check"></span><br />Proyek</a></li>
            </ul>
        </div>

        <!-- Halaman Konten -->
        <div id="page-content-wrapper">
            <!-- Buat seluruh isi konten berada dalam class="page-content inset" -->
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well lead header">Direktori Sistem Mahasiswa<a href="#" style="float:right; font-size:small; color:grey" 
                        class="text-center">Admin
                        <img src="{{asset('asset/mdi_account_circle.png')}}" style="padding-top:0px; padding-right: 30px; display:inline"></span>
                        <img src="{{asset('asset/mdi_notifications.png')}}" style="padding-top:0px; display:inline"></span>
                        <img src="{{asset('asset/mdi_arrow_drop_down.png')}}" style="padding-top:0px; display:inline"></span></a></div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="well lead text-center kategori" style="height: 50px; width: 275px">
                                Dashboard
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card cardstyle " style="padding: 20px;">
                                <div class="card-header" style="color: grey;">Total Project</div>
                                <div class="card-body">
                                    <h1 class="card-title">150</h1>
                                    <p class="card-text"><p style="color: green; display:inline">5%</p> since last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card cardstyle" style="padding: 20px;">
                                    <div class="card-header" style="color: grey;">Mahasiswa</div>
                                    <div class="card-body">
                                        <h1 class="card-title">50</h1>
                                        <p class="card-text"><p style="color: green; display:inline">5%</p> since last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card cardstyle" style="padding: 20px;">
                                        <div class="card-header" style="color: grey;">Dosen</div>
                                        <div class="card-body">
                                            <h1 class="card-title">15</h1>
                                            <p class="card-text"><p style="color: green; display:inline">5%</p> since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card cardstyle" style="padding: 20px;">
                                            <div class="card-header" style="color: grey;">Kategori</div>
                                            <div class="card-body">
                                                <h1 class="card-title">4</h1>
                                                <p class="card-text"><p style="color: green; display:inline">5%</p> since last month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- Akhir Wrapper -->
            <!-- <script src="{{asset('js/sidebar.js')}}"></script> -->
</body>

</html>