@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-5">
                <h1>Transaksi Gabungan (Harian) </h1>
              </div>
              <div class="col-sm-7">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Koreksi Migrasi Data</li>
                    <li class="breadcrumb-item"><a href="#">Transaksi Gabungan (Harian) </a></li>
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
                            <h3 class="card-title">
                                SELEKSI DATA</h3>
                            </div>
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-2 col-form-label">Cabang</label>
                                        <div class="col-sm-8">
                                                <select class="form-select" name="" id="">
                                                    <option selected>-- PILIH --</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="">
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-success float-right">Tampilkan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card card-gray-dark">
                            <div class="card-header">
                                <h3 class="card-title">HISTORI TRANSAKSI SIMPANAN [] s.d. []</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-info">
                                            <tr>
                                                <th rowspan="2" class="align-middle">NO.</th>
                                                <th rowspan="2" class="align-middle">NO. JURNAL</th>
                                                <th rowspan="2"  class="align-middle">REFERENSI</th>
                                                <th rowspan="2" class="align-middle">SANDI</th>
                                                <th colspan="4" class="text-center">KODE AKUN</th>
                                                <th rowspan="2" class="align-middle">JUMLAH</th>
                                                <th rowspan="2" class="align-middle">KET.</th>
                                                <th rowspan="2" class="align-middle">PETUGAS</th>
                                            </tr>
                                            <tr>
                                                <th>DEBET</th>
                                                <th>NAMA</th>
                                                <th>KREDIT</th>
                                                <th>NAMA</th>
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
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card card-gray-dark">
                            <div class="card-header">
                                <h3 class="card-title">HISTORI TRANSAKSI [2023-07-22]</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-info">
                                            <tr>
                                                <th rowspan="2" class="align-middle">NO.</th>
                                                <th rowspan="2"  class="align-middle">TANGGAL</th>
                                                <th rowspan="2" class="align-middle">SANDI</th>
                                                <th colspan="2" class="text-center">KODE AKUN</th>
                                                <th rowspan="2" class="align-middle">JUMLAH</th>
                                                <th rowspan="2" class="align-middle">KETERANGAN</th>
                                                <th scope="col" rowspan="2" class="align-middle">Tambah <div class="form-check">
                                                    <input class="form-check-input" name="" id="" type="checkbox" value="checkedValue" aria-label="Text for screen reader">
                                                </div></th>
                                                <th scope="col" rowspan="2" class="align-middle">Ubah / Hapus <div class="form-check">
                                                    <input class="form-check-input" name="" id="" type="checkbox" value="checkedValue" aria-label="Text for screen reader">
                                                </div></th>
                                            </tr>
                                            <tr>
                                                <th>DEBET</th>
                                                <th>KREDIT</th>
                                            </tr>
                                        </thead>
                                        </thead>
                                        <tbody class="table-bordered">
                                            <tr class="">
                                                <td scope="row"></td>
                                                <td><div class="col"><input type="text" name="" id="" class="form-control"></div></td>
                                                <td><div class="col"><input type="text" name="" id="" class="form-control"></div></td>
                                                <td><div class="col"><input type="text" name="" id="" class="form-control"></div></td>
                                                <td><div class="col"><input type="text" name="" id="" class="form-control"></div></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="" id="" type="checkbox" value="checkedValue" aria-label="Text for screen reader">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="table-bordered">
                                            <tr>
                                                <td colspan="9">
                                                    <input type="button" value="Tambah Isian" class="btn btn-danger">
                                                    <div class="float-right">
                                                        <input type="button" value="Tambah Data" class="btn btn-danger">
                                                        <input type="button" value="Ubah Data" class="btn btn-danger">
                                                        <input type="button" value="Hapus Data" class="btn btn-danger">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </div>
@endsection
