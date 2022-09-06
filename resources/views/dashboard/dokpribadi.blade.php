@extends('dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-10">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dokumen Pribadi</h1>    
            </div>
        </div>
    </div>
    <div class="row mb-1">
        <div class="col-md-10">
            <button type="button" class="btn" style="background-color: #00B5D8; color: white;">Tambah Dokumen</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <table class="table">
                <thead class="table-dark">
                  <tr>
                      <th scope="col">Nama Dokumen</th>
                      <th scope="col">Jenis</th>
                      <th scope="col">Ukuran</th>
                      <th scope="col">Verifikasi</th>
                      <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">KTP</th>
                        <td>KTP</td>
                        <td>10mb</td>
                        <td><form action=""><input type="checkbox"></form></td>
                        <td>download update</td>
                    </tr>
                    <tr>
                        <th scope="row">Kartu KK</th>
                        <td>Kartu KK</td>
                        <td>10mb</td>
                        <td><form action=""><input type="checkbox"></form></td>
                        <td>download update</td>
                    </tr>
                    <tr>
                        <th scope="row">Ijazah SD</th>
                        <td>Ijazah SD</td>
                        <td>10mb</td>
                        <td><form action=""><input type="checkbox"></form></td>
                        <td>download update</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection