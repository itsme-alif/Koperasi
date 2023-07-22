@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Log</h1>
                <div class="float-left pt-2">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item active"><a href="log"  class="text-muted">Data Log Sistem</a></li>
                    </ol>
                  </div>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Log</li>
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
                        <label for="inputtext3" class="col-sm-3 col-form-label">Tanggal Awal</label>
                        <div class="col-sm-9">
                            <input type="date" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Tanggal Akhir</label>
                        <div class="col-sm-9">
                            <input type="date" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Pengguna</label>
                        <div class="col-sm-9">
                            <select class="form-select form-select" name="pekerjaan" id="pekerjaan">
                                <option selected>--- Pilih ---</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Action</label>
                        <div class="col-sm-9">
                            <select class="form-select form-select" name="pekerjaan" id="pekerjaan">
                                <option selected>--- Pilih ---</option>
                            </select>
                        </div>
                    </div>
               </div>
               <div class="card-footer">
                    <div class="float-right">
                        <button type="submit" class="btn btn-success">Tampilkan</button>
                    </div>
                </div>
            </div>
            <div class="card card-gray-dark">
                <div class="card-header">
                   <h3 class="card-title font-weight-bold">Data Log Sistem</h3>
               </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-gray-dark">
                                <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Pengguna</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Deskripsi Log</th>
                                    <th scope="col">IP Source</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">1</td>
                                    <td >Ads</td>
                                    <td ></td>
                                    <td ></td>
                                    <td ></td>
                                    <td ></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
      </div>
    @endsection
