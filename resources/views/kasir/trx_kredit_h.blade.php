@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-5">
                <h1> Transaksi Kredit Harian</h1>
              </div>
              <div class="col-sm-7">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Kasir/Keuangan</li>
                    <li class="breadcrumb-item"><a href="#"> Transaksi Kredit Harian</a></li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-gray-dark">
                            <div class="card-header">
                            <h3 class="card-title">Pencarian Data</h3>
                            </div>
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-4 col-form-label">Nomor Rekening Tabungan</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputtext3" class="col-form-label text-danger">Cari Rekening Tabungan... </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Tampilkan</button>
                                </div>
                            </form>
                        </div>

                        <div class="card card-gray-dark">
                            <div class="card-header">
                                <h3 class="card-title">DATA INSTRUKTUR</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-info">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">NBA</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Tgl. Pendaftaran</th>
                                                <th scope="col">Umur</th>
                                                <th scope="col">Status Anggota</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-bordered">
                                            <tr class="">
                                                <td scope="row"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </div>
@endsection
