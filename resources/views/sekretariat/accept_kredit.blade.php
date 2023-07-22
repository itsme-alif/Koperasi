@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Persetujuan Kredit</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="user" class="text-muted">Sekretariat</a></li>
                  <li class="breadcrumb-item active"><a href="pinjaman_policy"> Persetujuan Kredit </a></li>
                </ol>
              </div>

            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card card-gray-dark">
                <div class="card-header">
                   <h3 class="card-title font-weight-bold">DAFTAR KREDIT DIAJUKAN</h3>
               </div>
               <div class="card-body">
                   <div class="table-responsive">
                       <div class="table-responsive">
                           <table class="table table-bordered">
                               <thead class="bg-info">
                                   <tr>
                                       <th scope="col" rowspan="2" class="align-middle">View</th>
                                       <th scope="col" colspan="4">	Data Rekening Kredit</th>
                                       <th scope="col" colspan="9">Keterangan Kredit</th>
                                   </tr>
                                   <tr>
                                    <th scope="col">Nomor Rekening</th>
                                    <th scope="col">Tgl. Pendaftaran</th>
                                    <th scope="col">NBA</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Bunga</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Tipe</th>
                                    <th scope="col">Agunan</th>
                                    <th scope="col">Nilai Agunan</th>
                                    <th scope="col">Keperluan</th>
                                    <th scope="col">Kredit Aktif</th>
                                </tr>
                               </thead>
                               <tbody class="table-bordered">
                                   <tr class="">
                                       <td scope="row"></td>
                                       <td></td>
                                       <td></td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
        </section>
      </div>
    @endsection
