@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Daftar Akun</h1>
                <div class="float-left pt-2">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="account">Tabel Kode Akun</a></li>
                      <li class="breadcrumb-item active"><a href="account_edit">Edit Kode Akun</a></li>
                      <li class="breadcrumb-item active"><a href="account_balance" class="text-muted">Set Saldo Awal</a></li>
                    </ol>
                  </div>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Daftar Pengguna</a></li>
                    <li class="breadcrumb-item active">Data Pengguna</li>
                  </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card card-gray-dark">
                <div class="card-header">
                   <h3 class="card-title font-weight-bold">Data Berita</h3>
               </div>
               <div class="card-body">
                   <div class="table-responsive">
                       <div class="table-responsive">
                           <table class="table table-bordered table-sm">
                               <thead class="bg-info">
                                   <tr>
                                       <th scope="col" rowspan="2" class="align-middle">Kode Akun</th>
                                       <th scope="col" rowspan="2" class="align-middle">Nama</th>
                                       <th scope="col" rowspan="2" class="align-middle">Saldo Normal</th>
                                       <th scope="col" colspan="2" class="align-middle">Saldo Awal</th>
                                   </tr>
                                   <tr>
                                    <th scope="col">Debet</th>
                                    <th scope="col">Kredit</th>
                                </tr>
                               </thead>
                               <tbody class="table-bordered">
                                   <tr class="">
                                       <td scope="row"></td>
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
           <div class="card card-gray-dark">
            <div class="card-header">
               <h3 class="card-title font-weight-bold">Set Saldo Awal</h3>
           </div>
           <div class="card-body">
                <div class="form-group row">
                    <label for="inputtext3" class="col-sm-3 col-form-label">Tanggal Transaksi Saldo Awal</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan text">
                    </div>
                </div>
           </div>
           <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Set Saldo Awal</button>
            </div>
        </div>
        </section>
      </div>
    @endsection
