@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Persetujuan Kredit Harian</h1>
                <div class="float-left pt-2">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#" >Sekretariat</a></li>
                      <li class="breadcrumb-item active"><a href="#" class="text-muted"> Surat Perjanjian Pinjaman </a></li>
                    </ol>
                  </div>
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
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Tanggal Persetujuan	</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
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
