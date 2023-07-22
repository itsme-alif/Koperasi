@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-5">
                <h1>Koreksi Transaksi Kredit Reguler</h1>
              </div>
              <div class="col-sm-7">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Kasir/Keuangan</li>
                    <li class="breadcrumb-item"><a href="#">Koreksi Transaksi Kredit Reguler</a></li>
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
                            <h3 class="card-title">PENCARIAN DATA</h3>
                            </div>
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-4 col-form-label">Nomor kredit</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <select name="" id="" class="form-select">
                                                <option value="">-- PILIH --</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Cari" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </section>
    </div>
@endsection
