@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-5">
                <h1>Jurnal Umum</h1>
              </div>
              <div class="col-sm-7">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Kasir/Keuangan</li>
                    <li class="breadcrumb-item"><a href="#">Jurnal Umum</a></li>
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
                            <h3 class="card-title">Jurnal Umum</h3>
                            </div>
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-4 col-form-label">Tanggal Jurnal</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-4 col-form-label">Cabang</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-select">
                                                <option value="">-- PILIH --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-4 col-form-label">Nomor Referensi</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-4 col-form-label">Keterangan</label>
                                        <div class="col-sm-8">
                                              <textarea class="form-control" name="" id="" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="card card-gray-dark">
                            <div class="card-header">
                                <h3 class="card-title">DAFTAR PROSES BUNGA TABUNGAN</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-info">
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col" colspan="2">Akun</th>
                                                <th scope="col">Debet</th>
                                                <th scope="col">Kredit</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-bordered">
                                            <tr class="">
                                                <td scope="row" rowspan="2">1</td>
                                                <td colspan="2"><div class="row">
                                                    <div class="col-4"><input type="text" class="form-control col"></div>
                                                    <div class="col"><select name="" id="" class="form-select">
                                                        <option value=""></option>
                                                    </select></div>
                                                </div></td>
                                                <td><div class="col"><input type="text" class="form-control"></div></td>
                                                <td><div class="col"><input type="text" class="form-control"></div></td>
                                            </tr>
                                            <tr class="">
                                                <td scope="row"></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-4"><input type="text" class="form-control col"></div>
                                                        <div class="col"><select name="" id="" class="form-select">
                                                            <option value=""></option>
                                                            </select></div>
                                                        </div>
                                                </td>
                                                <td><div class="col"><input type="text" class="form-control"></div></td>
                                                <td><div class="col"><input type="text" class="form-control"></div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </div>
@endsection
