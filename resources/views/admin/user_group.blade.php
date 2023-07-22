@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Daftar Pengguna</h1>
                <div class="float-left pt-2">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="user">Data Pengguna</a></li>
                      <li class="breadcrumb-item active"><a href="user_group" class="text-muted">Akses Group Pengguna</a></li>
                      <li class="breadcrumb-item active"><a href="user_cashier">Kasir : Akses Tanggal</a></li>
                    </ol>
                  </div>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item"><a href="#">Daftar Pengguna</a></li>
                  <li class="breadcrumb-item active">Akses Group Pengguna</li>
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
                        <label for="inputtext3" class="col-sm-3 col-form-label">Pekerjaan</label>
                        <div class="col-sm-9">
                            <select class="form-select form-select" name="pekerjaan" id="pekerjaan">
                                <option selected>--- Pilih ---</option>
                                <option label="Administrator" value="1">Administrator</option>
                                <option label="Kepala Kasir" value="2">Kepala Kasir</option>
                                <option label="Sekretariat" value="3">Sekretariat</option>
                                <option label="Kredit" value="4">Kredit</option>
                                <option label="Keuangan" value="5">Keuangan</option>
                                <option label="Penagih" value="6">Penagih</option>
                                <option label="Manager" value="7">Manager</option>
                                <option label="Kasir-Sekretariat" value="8">Kasir-Sekretariat</option>
                                <option label="Kasir-Sekretariat-Kredit" value="9">Kasir-Sekretariat-Kredit</option>
                                <option label="Reset Login" value="10">Reset Login</option>
                                <option label="Operator Migrasi" value="11">Operator Migrasi</option>
                                <option label="Pengurus" value="12">Pengurus</option>
                                <option label="Pengawas" value="13">Pengawas</option>
                                <option label="Audit" value="14">Audit</option>
                                <option label="Kasir" value="15">Kasir</option>
                                <option label="migrasi data" value="16">migrasi data</option>
                                <option label="Ketua" value="17">Ketua</option>
                                <option label="KSPA" value="18">KSPA</option>
                                <option label="DAPERMA" value="19">DAPERMA</option>
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
                   <h3 class="card-title font-weight-bold">Akses Pengguna</h3>
               </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-gray-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Add</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">Special</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">1</td>
                                    <td class="col-6">Ads</td>
                                    <td ><input type="checkbox" value="" id=""></td>
                                    <td ><input type="checkbox" value="" id=""></td>
                                    <td ><input type="checkbox" value="" id=""></td>
                                    <td ><input type="checkbox" value="" id=""></td>
                                    <td ><input type="checkbox" value="" id=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger float-right">Ubah Data</button>
                </div>
            </div>
            
        </section>
      </div>
    @endsection
