@extends('layout.base')
@section('title')
Dosen
@endsection
@section('content')
<div style="padding-top:40px;">
    <div class="row text-center">
        <div class="col-md-12">
            <div class="col-md-6 col-md-offset-3" style="padding-bottom: 20px;">
                <img src="{{asset('asset/ellipse.png')}}" height="200" alt="logo" loading="lazy" style="padding-bottom: 10px;">
                <h3 style="padding-bottom: 60px;">@yield('title')</h3>

                <div class="col-md-6">
                    <a href="/mahasiswa" style="color:black">
                        <h3>List Proyek</h3>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="/tentang"style="color:black">
                        <h3>Tentang</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row text-center" style="background-color:#F2F3F5;margin-left:-20px;">
    <img src="{{asset('asset/tentang.png')}}" alt="logo" loading="lazy" style="padding-bottom: 20px;padding-top:20px;">
</div>
@endsection