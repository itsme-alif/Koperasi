@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Aktivasi No.Wa</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Sekretariat</a></li>
                  <li class="breadcrumb-item active">Aktivasi No.Wa</li>
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
                                        <label for="inputtext3" class="col-sm-3 col-form-label">ID Anggota</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan Nama Anggota">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Cabang - Lingkungan</label>
                                        <div class="col-sm-5">
                                            <select class="form-select form-select" name="cabang" id="cabang">
                                                <option selected>--- Pilih ---</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select form-select" name="lingkungan" id="">
                                                <option selected>--- Pilih ---</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Status Anggota</label>
                                        <div class="col-sm-9">
                                            <select class="form-select form-select" name="cabang" id="cabang">
                                                <option selected>--- Pilih ---</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <div class="card card-gray-dark">
                            <div class="card-header">
                               <h3 class="card-title font-weight-bold">DAFTAR ANGGOTA</h3>
                           </div>
                           <div class="card-body">
                               <div class="table-responsive">
                                   <div class="table-responsive">
                                       <table class="table">
                                           <thead class="bg-info">
                                               <tr>
                                                   <th scope="col">No.</th>
                                                   <th scope="col">No. WA</th>
                                                   <th scope="col">No. Lain</th>
                                                   <th scope="col">Aktivasi</th>
                                                   <th scope="col">ID Anggota</th>
                                                   <th scope="col">Nama</th>
                                                   <th scope="col">Tgl. Pendaftaran</th>
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
            </div>
        </section>
    </div>
@endsection
