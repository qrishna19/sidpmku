<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SIDPM</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link id="bootstrap-css" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/notif.css')}}">

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
                <li><a href="/admin" class="text-center"><span class="sub_icon glyphicon glyphicon-user"></span><br />User</a></li>
                <li><a href="/admin" class="text-center"><span class="sub_icon glyphicon glyphicon-floppy-disk"></span><br />Master Data</a></li>
                <li><a href="/admin" class="text-center"><span class="sub_icon glyphicon glyphicon-th-large"></span><br />Kategori</a></li>
                <li><a href="/admin" class="text-center"><span class="sub_icon glyphicon glyphicon-check"></span><br />Proyek</a></li>
            </ul>
        </div>

        <!-- Halaman Konten -->
        <div id="page-content-wrapper">
            <!-- Buat seluruh isi konten berada dalam class="page-content inset" -->
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well lead header">Direktori Sistem Mahasiswa
                            <ul class="nav navbar-nav navbar-right" style="margin-top: -20px !important;">
                                <!-- <ul> -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{asset('asset/mdi_notifications.png')}}" style="padding-top:0px; display:inline"></span>
                                        <img src="{{asset('asset/mdi_arrow_drop_down.png')}}" style="padding-top:0px; display:inline"></span></a>
                                    <ul class="dropdown-menu notify-drop" style="min-width: 250px;">
                                        <div class="notify-drop-title">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">Bildirimler (<b>2</b>)</div>
                                                <div class="col-md-6 col-sm-6 col-xs-6 text-right"><a href="" class="rIcon allRead" data-tooltip="tooltip" data-placement="bottom" title="tümü okundu."><i class="fa fa-dot-circle-o"></i></a></div>
                                            </div>
                                        </div>
                                        <!-- end notify title -->
                                        <!-- notify content -->
                                        <div class="drop-content">
                                            <li>
                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                    <div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div>
                                                </div>
                                                <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">Çicek bahçeleri...</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>

                                                    <hr>
                                                    <p class="time">Şimdi</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                    <div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div>
                                                </div>
                                                <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">Çicek bahçeleri...</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                                                    <p>Lorem ipsum sit dolor amet consilium.</p>
                                                    <p class="time">1 Saat önce</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                    <div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div>
                                                </div>
                                                <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">Çicek bahçeleri...</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                                                    <p>Lorem ipsum sit dolor amet consilium.</p>
                                                    <p class="time">29 Dakika önce</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                    <div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div>
                                                </div>
                                                <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">Çicek bahçeleri...</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                                                    <p>Lorem ipsum sit dolor amet consilium.</p>
                                                    <p class="time">Dün 13:18</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                    <div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div>
                                                </div>
                                                <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">Çicek bahçeleri...</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                                                    <p>Lorem ipsum sit dolor amet consilium.</p>
                                                    <p class="time">2 Hafta önce</p>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="notify-drop-footer text-center">
                                            <a href=""><i class="fa fa-eye"></i> Tümünü Göster</a>
                                        </div>
                                    </ul>
                                </li>
                            </ul>

                            <a href="#" style="float:right; font-size:small; color:grey" class="text-center">Admin
                                <img src="{{asset('asset/mdi_account_circle.png')}}" style="padding-top:0px; padding-right: 30px; display:inline"></span>
                            </a>
                        </div>
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
                                    <p class="card-text">
                                        <p style="color: green; display:inline">5%</p> since last month
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card cardstyle" style="padding: 20px;">
                                    <div class="card-header" style="color: grey;">Mahasiswa</div>
                                    <div class="card-body">
                                        <h1 class="card-title">50</h1>
                                        <p class="card-text">
                                            <p style="color: green; display:inline">5%</p> since last month
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card cardstyle" style="padding: 20px;">
                                        <div class="card-header" style="color: grey;">Dosen</div>
                                        <div class="card-body">
                                            <h1 class="card-title">15</h1>
                                            <p class="card-text">
                                                <p style="color: green; display:inline">5%</p> since last month
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card cardstyle" style="padding: 20px;">
                                            <div class="card-header" style="color: grey;">Kategori</div>
                                            <div class="card-body">
                                                <h1 class="card-title">4</h1>
                                                <p class="card-text">
                                                    <p style="color: green; display:inline">5%</p> since last month
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Akhir Wrapper -->
            <script src="{{asset('js/notif.js')}}"></script>
</body>

</html>