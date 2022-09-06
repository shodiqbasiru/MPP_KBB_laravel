@extends('dashboard.layouts.main')

@section('container')

<div class="row">
    <div class="col-md-10">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>    
        </div>
    </div>
</div>
<div class="row justify-content-start">
    <div class="card col-md-2 card-profil shadow mt-3 ms-2 me-5  py-3">
        <div class="mb-1 px-2">
            <h5>Jumlah Dokumen Pribadi</h5>
        </div>
        <div class="mb-2 px-2 text-center">
            <h3>0</h3>
        </div>
    </div>
    <div class="card col-md-2 card-profil shadow mt-3 mx-2 py-3 ">
        <div class="mb-1 px-2">
            <h5>Jumlah Dokumen Pribadi</h5>
        </div>
        <div class="mb-2 px-2 text-center">
            <h3>0</h3>
        </div>
    </div>
    <div class="card col-md-2 card-profil shadow mt-3 mx-2 py-3 ">
        <div class="mb-1 px-2">
            <h5>Jumlah Dokumen Terverifikasi</h5>
        </div>
        <div class="mb-2 px-2 text-center">
            <h3>0</h3>
        </div>
    </div>
    <div class="card col-md-2 card-profil shadow mt-3 mx-2 py-3 ">
        <div class="mb-1 px-2">
            <h5>Jumlah Dokumen Belum Verifikasi</h5>
        </div>
        <div class="mb-2 px-2 text-center">
            <h3>0</h3>
        </div>
    </div>
</div>      

@endsection
