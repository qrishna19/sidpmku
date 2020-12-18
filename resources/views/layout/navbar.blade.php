<div class="well lead header">
    <img src="{{asset('asset/logo.png')}}" style="padding-top:0px; display:inline">

    <ul class="nav navbar-nav navbar-right" style="margin-top: -20px !important;">
        <li style="padding-top: 8px;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="{{asset('asset/mdi_notifications.png')}}" style="padding-top:0px; display:inline">
            </a>

            <ul class="dropdown-menu notify-drop" style="min-width: 250px;">
                <div class="drop-content" style="padding-top: 10px;">
                    <li>
                        <a href="/mahasiswa" style="color:black">
                            <h5 style="padding-left:20px"><b>Ahmad Rifal</b> Menambahkan anda dalam sebuah proyek</h5>
                        </a>
                    </li>
                    <li>
                        <h5 style="padding-left:20px">apakah anda menyetujui?</h5>
                    </li>
                    <li>
                        <div class="row text-center">
                            <div class="col-md-6">
                                <h5 style="color:blue">Ya</h5>
                            </div>
                            <div class="col-md-6">
                                <h5 style="color:red">Tidak</h5>
                            </div>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <a href="/mahasiswa" style="color:black">
                            <h5 style="padding-left:20px"><b>Pale</b> Menambahkan anda dalam sebuah proyek</h5>
                        </a>
                    </li>
                    <li>
                        <h5 style="padding-left:20px">apakah anda menyetujui?</h5>
                    </li>
                    <li>
                        <div class="row text-center">
                            <div class="col-md-6">
                                <h5 style="color:blue">Ya</h5>
                            </div>
                            <div class="col-md-6">
                                <h5 style="color:red">Tidak</h5>
                            </div>
                        </div>
                    </li>
                </div>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="{{asset('asset/mdi_arrow_drop_down.png')}}" style="padding-top:0px; display:inline">
            </a>

            <ul class="dropdown-menu notify-drop" style="min-width: 250px;">
                <div class="drop-content" style="padding-top: 10px;">
                    <li>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="notify-img"><img src="{{asset('asset/ellipse.png')}}" height="50" alt="logo" loading="lazy" style="padding-top: 10px;padding-left:5px"></div>
                        </div>

                        <div class="col-md-9 col-sm-9 col-xs-9 pd-l0" style="padding-bottom: 10px;">
                            <div class="row">
                                <h5><b>Nama @yield('title')</b></h5>
                                <h5>@yield('title')</h5>
                            </div>
                        </div>
                    </li>
                    <li class="text-center">
                        <a href="/mahasiswa">
                            <h5 style="padding-bottom: 10px;">Lihat Profil Anda</h5>
                        </a>
                    </li>
                    <li>
                        <a href="/mahasiswa" style="color:black">
                            <h5 style="padding-left:20px">Edit Profile</h5>
                        </a>
                    </li>
                    <li>
                        <a href="/mahasiswa" style="color:black">
                            <h5 style="padding-left:20px">Pengaturan & Privasi</h5>
                        </a>
                    </li>
                    <li>
                        <a href="/mahasiswa" style="color:black">
                            <h5 style="padding-left:20px">Sign Out</h5>
                        </a>
                    </li>
                </div>
            </ul>
        </li>
    </ul>
    <a href="/mahasiswa" style="float:right; font-size:18px; color:grey" class="text-center">@yield('title')
        <img src="{{asset('asset/mdi_account_circle.png')}}" style="padding-top:0px; padding-right: 30px; padding-left: 10px; display:inline"></span>
    </a>
</div>