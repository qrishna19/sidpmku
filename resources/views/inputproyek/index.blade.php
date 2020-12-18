@extends('layout.base')
@section('title')
Mahasiswa
@endsection
@section('content')
<div class="row text-center" style="background-color:#F2F3F5;margin-left:-20px;margin-top:-20px">
    <h3 style="padding-top: 20px;padding-bottom:20px"><b>Input Proyek</b></h3>
    <div class="container" style="background-color: white;">
        <div class="row text-left" style="padding-top: 40px;padding-bottom:40px">
            <div class="col-md-12">
                <h4><b>Judul Proyek</b></h4>
                <input class="form-control form-control-lg" style="height:50px" type="text" placeholder="Nama Proyek">
                <br>
                <h4><b>Deskripsi Proyek</b></h4>
                <input class="form-control form-control-lg" style="height:100px" type="text" placeholder="Deskripsi Proyek">
                <br>
                <h4><b>Jenis Proyek</b></h4>
                <input class="form-control form-control-lg" style="height:50px" type="text" placeholder="Lomba, Proyek diluar Kuliah, Proyek Matakuliah">
                <br>
                <h4><b>Kategori</b></h4>
                <select class="form-control form-control-lg" style="height:50px">
                    <option>Aplikasi WEB</option>
                    <option>Aplikasi Mobile</option>
                    <option>Tugas Akhir</option>
                    <option>Multimedia</option>
                </select>
                <br>
                <h4><b>Pembimbing</b></h4>
                <input class="form-control form-control-lg" style="height:50px" type="text" placeholder="Nama Pembimbing">
                <br>
                <h4><b>Anggota Proyek</b></h4>
                <input class="form-control form-control-lg" style="height:50px" type="text" placeholder="Nama Anggota Proyek">
                <br>
                <h4><b>Link Proyek</b></h4>
                <input class="form-control form-control-lg" style="height:50px;" type="text" placeholder="Link Github/ Google Drive">
                <br>
                <br>
                <a href="/mahasiswa"><button style="height:50px;width:100%;background-color:blue;color:white;border:white">Save</button></a>  
            </div>
        </div>
    </div>
    <br>
    <br>
</div>
@endsection