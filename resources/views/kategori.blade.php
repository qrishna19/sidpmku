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
                <li><a href="/" class="text-center"><span class="sub_icon glyphicon glyphicon-home"></span><br />Beranda</a></li>
                <li><a href="/kategori" class="text-center"><span class="sub_icon glyphicon glyphicon-th-large"></span><br />Kategori</a></li>
            </ul>
        </div>

        <!-- Halaman Konten -->
        <div id="page-content-wrapper">
            <!-- Buat seluruh isi konten berada dalam class="page-content inset" -->
            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well lead header">Direktori Sistem Mahasiswa<a href="#" style="float:right; font-size:small; color:grey" class="text-center"><span class="sub_icon glyphicon glyphicon-user" style="padding-top:0px; padding-right:inherit;"></span><br />Masuk</a></div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well lead text-center kategori">
                                Kategori
                            </div>
                        </div>
                    </div>
                    <div class="row project-item" style="margin-top:50px">
                        <div class="col-md-6 text-center">
                            <img src="{{asset('asset/Group 63.png')}}" class="item-image">
                            <br>
                            <p class="item-title">Aplikasi WEB</p>
                            
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="{{asset('asset/Group 64.png')}}" class="item-image">
                            <br>
                            <p class="item-title">Aplikasi Mobile</p>
                            
                        </div>
                    </div>
                    <div class="row project-item" style="margin-top:50px">
                        <div class="col-md-6 text-center">
                            <img src="{{asset('asset/Group 65.png')}}" class="item-image">
                            <br>
                            <p class="item-title">Tugas Akhir</p>
                            
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="{{asset('asset/Group 66.png')}}" class="item-image">
                            <br>
                            <p class="item-title">Multimedia</p>
                            
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