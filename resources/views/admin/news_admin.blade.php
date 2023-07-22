@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Info & Berita</h1>
                <div class="float-left pt-2">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="news">Siaran Berita</a></li>
                      <li class="breadcrumb-item active"><a href="news_admin" class="text-muted">Admin</a></li>
                    </ol>
                  </div>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active">Info & Berita</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card card-gray-dark">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Berita</h3>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Judul</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="inputtext3" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Isi Berita</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="alamat_id" id="alamat_id" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Kategori Berita</label>
                        <div class="col-sm-9">
                            <select class="form-select form-select" name="ahli_waris" id="ahli_waris">
                                <option value="0" selected>--- Pilih ---</option>
                                <option label="UMUM" value="UMUM">UMUM</option>
                                <option label="BeUNION3.0" value="BeUNION3.0">BeUNION3.0</option>
                                <option label="CU Cinta Damai" value="CU Cinta Damai">CU Cinta Damai</option>
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
                   <h3 class="card-title font-weight-bold">Data Berita</h3>
               </div>
               <div class="card-body">
                   <div class="table-responsive">
                       <div class="table-responsive">
                           <table class="table">
                               <thead class="bg-info">
                                   <tr>
                                       <th scope="col">Edit</th>
                                       <th scope="col">Judul</th>
                                       <th scope="col">Tanggal</th>
                                       <th scope="col">Kategori</th>
                                       <th scope="col">Pengirim</th>
                                       <th scope="col">Select <input type="checkbox" class="float-right" value="" id=""> </th>
                                   </tr>
                               </thead>
                               <tbody class="table-bordered">
                                   <tr class="">
                                       <td scope="row">1</td>
                                       <td>2</td>
                                       <td>3</td>
                                       <td>4</td>
                                       <td>5</td>
                                       <td><input type="checkbox" value="" id="" class="float-right"></td>
                                   </tr>
                               </tbody>
                               <tfoot class="table-bordered bg-info">
                                    <tr>
                                        <td colspan="6">
                                            <a class="btn btn-danger btn-sm float-right" href="#" role="button">Hapus</a>
                                        </td>
                                    </tr>
                               </tfoot>
                           </table>
                       </div>

                   </div>

               </div>
           </div>
        </section>
      </div>
    @endsection
