@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-5">
                <h1>Pendaftaran Nasabah </h1>
              </div>
              <div class="col-sm-7">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Sekretariat</a></li>
                  <li class="breadcrumb-item"><a href="#"> Pendaftaran Simpanan Berjangka</a> </li>
                  <li class="breadcrumb-item active">Pendaftaran Nasabah </li>
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
                            <h3 class="card-title">Pencarian Data Anggota</h3>
                            </div>
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-4 col-form-label">Nomor Rekening Simpanan Berjangka</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Cari Data</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </section>
    </div>
@endsection
