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
                          <li class="breadcrumb-item"><a href="cabang">Daftar Cabang</a></li>
                          <li class="breadcrumb-item active"><a href="add_cabang" class="text-muted">Tambah Cabang</a></li>
                        </ol>
                      </div>
                  </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Daftar Cabang Link.</a></li>
                    <li class="breadcrumb-item active">Tambah Cabang</li>
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
                        <label for="inputtext3" class="col-sm-3 col-form-label">Cabang</label>
                        <div class="col-sm-9">
                            <select class="form-select form-select" name="pekerjaan" id="pekerjaan">
                                <option selected>--- Pilih ---</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Detail</label>
                        <div class="col-sm-9">
                            <select class="form-select form-select" name="pekerjaan" id="pekerjaan">
                                <option selected>--- Pilih ---</option>
                            </select>
                        </div>
                    </div>
               </div>
               <div class="card-footer">
                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
            </div>
            <div class="card card-gray-dark">
                <div class="card-header">
                   <h3 class="card-title font-weight-bold">Data</h3>
               </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="bg-gray-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">View</th>
                                    <th scope="col" class="text-center">Add</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">1</td>
                                    <td class="col-6">Ads</td>
                                    <td ></td>
                                    <td  class="text-center"><input type="checkbox" value="" id=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger float-right">Hapus</button>
                </div>
            </div>
            <div class="card card-gray-dark">
                <div class="card-header">
                   <h3 class="card-title font-weight-bold">Add Data</h3>
               </div>
               <div class="card-body">
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Kode</label>
                        <div class="col-sm-9">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                           <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
               </div>
               <div class="card-footer">
                    <button type="submit" class="btn btn-success">Add Data</button>
                </div>
            </div>
        </section>
      </div>
    @endsection
