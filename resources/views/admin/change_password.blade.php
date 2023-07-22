@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Cabang Link.</h1>
                    <div class="float-left pt-2">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item active"><a href="change_password" class="text-muted">Ganti Kata Sandi</a></li>
                        </ol>
                      </div>
                  </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Ganti Kata Sandi</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card card-gray-dark">
                <div class="card-header">
                   <h3 class="card-title font-weight-bold">Seleksi Data</h3>
               </div>
               <div class="card-body">
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">ID Pengguna</label>
                        <div class="col-sm-9">
                            <input type="text" name="" id="" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" name="" id="" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Group Pengguna</label>
                        <div class="col-sm-9">
                            <input type="text" name="" id="" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <input type="text" name="" id="" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Kata Sandi Lama</label>
                        <div class="col-sm-9">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Kata Sandi Baru</label>
                        <div class="col-sm-9">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Ulang Kata Sandi Baru</label>
                        <div class="col-sm-9">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
               </div>
               <div class="card-footer">
                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
            </div>
        </section>
      </div>
    @endsection
