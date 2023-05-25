@extends('dashboard.layouts.app')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Data Penduduk</h4>
                    <a href="/form-pengajuan-penduduk" class="btn btn-sm btn-primary">
                    <i class="fa-regular fa-plus mr-2"></i>Tambah Data 
                    </a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>Agama</th>
                          <th>Status Perkawinan</th>
                          <th>Pekerjaan</th>
                          <th>Kewarganegaraan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>53275531</td>
                          <td>Tegal, 22 September 1998</td>
                          <td>Laki-laki</td>
                          <td>RT2 RW3, Kedungjati, Warureja, Kab. Tegal</td>
                          <td>Islam</td>
                          <td>Belum Kawin</td>
                          <td>Mahasiswa</td>
                          <td>Indonesia</td>
                          <td>
                            <a class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
      </div>
@endsection