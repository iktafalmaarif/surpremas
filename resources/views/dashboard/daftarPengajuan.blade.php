@extends('dashboard.layouts.app')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Daftar Pengajuan</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>No. Telepon</th>
                          <th>Alamat</th>
                          <th>KTP</th>
                          <th>KK</th>
                          <th>Jenis Surat</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>faturrahman</td>
                          <td>083888339999</td>
                          <td>RT2 / RW3, Kedungjati, Warureja, Tegal</td>
                          <td>
                            <a class="btn btn-success btn-sm"><i class="fa-solid fa-id-card"></i></a>
                          </td>
                          <td>
                          <a class="btn btn-primary btn-sm"><i class="fa-solid fa-file"></i></a>
                          </td>
                          <td>Surat Keterangan Tidak Mampu</td>
                          <td>
                          <a class="btn btn-warning btn-sm"><i class="fa-solid fa-file-pen"></i></a>
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