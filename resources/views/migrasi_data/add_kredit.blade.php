@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>PENDAFTARAN REKENING SISUKA</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Migrasi Data</a></li>
                  <li class="breadcrumb-item active">PENDAFTARAN REKENING SISUKA</li>
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

                <!-- /.card -->
                <div class="card card-gray-dark">
                    <div class="card-header">
                    <h3 class="card-title">PENDAFTARAN REKENING SISUKA</h3>
                    </div>
                    <form class="form-horizontal">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-3 col-form-label">ID Anggota</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-3 col-form-label">Tanggal Persetujuan</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-3 col-form-label">Kategori Kredit Usaha</label>
                                <div class="col-sm-9">
                                    <select class="form-select form-select" name="agama" id="agama">
                                        <option selected>--- Pilih ---</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-3 col-form-label">Jumlah Permohonan Kredit (Rp)</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-3 col-form-label">Tingkat Bunga (per Bulan)</label>
                                <div class="col-sm-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tipe_anggota" id="tipe_anggota" value="Anggota Biasa">
                                        <label class="form-check-label" for="tipe_anggota">
                                            2.5%
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tipe_anggota" id="tipe_anggota" value="Anggota Luar Biasa">
                                        <label class="form-check-label" for="tipe_anggota">
                                            2.0%
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tipe_anggota" id="tipe_anggota" value="Anggota Luar Biasa">
                                        <label class="form-check-label" for="tipe_anggota">
                                            1.265%
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tipe_anggota" id="tipe_anggota" value="Anggota Luar Biasa">
                                        <label class="form-check-label" for="tipe_anggota">
                                            2.3%
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-3 col-form-label">Jangka Waktu (Bulan)</label>
                                <div class="col-sm-9">
                                    <select class="form-select form-select" name="agama" id="agama">
                                        <option selected>--- Pilih ---</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-3 col-form-label">Agunan (opt)</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="" id="" rows="3"></textarea>                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-3 col-form-label">Nilai Agunan (Rp) (opt)</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-3 col-form-label">Keperluan Kredit (opt)</label>
                                <div class="col-sm-9">
                                      <textarea class="form-control" name="" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-3 col-form-label">Status Kredit</label>
                                <div class="col-sm-9">
                                    <select class="form-select form-select" name="agama" id="agama">
                                        <option selected>--- Pilih ---</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right">Tambah Data</button>
                        </div>
                    </form>
                </div>

                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>


    @endsection
