@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-5">
                <h1>Simpanan</h1>
              </div>
              <div class="col-sm-7">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Koreksi Migrasi Data</li>
                    <li class="breadcrumb-item"><a href="#">Simpanan</a></li>
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
                                        <label for="inputtext3" class="col-sm-2 col-form-label">ID Anggota</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="">
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
                                <h3 class="card-title">DATA ANGGOTA</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody class="table-bordered">
                                            <tr class="">
                                                <th class="col-3">NBA</th>
                                                <td class="col-3"></td>
                                                <th>Cabang</th>
                                                <td class="col-3"></td>
                                            </tr>
                                            <tr class="">
                                                <th>Tipe Anggota</th>
                                                <td></td>
                                                <th>Lingkungan</th>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <th>Kartu ID / Nomor</th>
                                                <td></td>
                                                <th>Phone / HP</th>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <th>Nama</th>
                                                <td></td>
                                                <th>Tk. Pendidikan / Pekerjaan</th>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <th>Tempat / Tgl. Lahir</th>
                                                <td></td>
                                                <th>Nama Kantor</th>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <th>Jenis Kelamin / Status</th>
                                                <td></td>
                                                <th>Alamat (Kantor)</th>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <th>Alamat (ID)</th>
                                                <td></td>
                                                <th>Penghasilan Bulanan</th>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <th>Alamat (Sekarang)</th>
                                                <td></td>
                                                <th>Tgl. Pendaftaran / Status</th>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <th></th>
                                                <td></td>
                                                <th>Keterangan</th>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card card-gray-dark">
                            <div class="card-header">
                                <h3 class="card-title">SALDO SIMPANAN SAHAM, SIMPANAN NON SAHAM, PINJAMAN DLL.</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody class="table-bordered">
                                            <tr class="">
                                                <th class="col-3">Simpanan Pokok</th>
                                                <td class="col-3"></td>
                                                <th>Uang Pangkal</th>
                                                <td class="col-3"></td>
                                            </tr>
                                            <tr class="">
                                                <th>Simpanan Wajib</th>
                                                <td></td>
                                                <th>DAKESMA</th>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <th>Simpanan Sukarela</th>
                                                <td></td>
                                                <th>DASOSKEM</th>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <td colspan="4" class="bg-dark"></td>
                                            </tr>
                                            <tr class="">
                                                <th>Rekening Tabungan</th>
                                                <td></td>
                                                <th></th>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <th>Rekening Deposito</th>
                                                <td></td>
                                                <th colspan="2"></th>
                                            </tr>
                                            <tr class="">
                                                <th>Rekening Kredit</th>
                                                <td></td>
                                                <th></th>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card card-gray-dark">
                            <div class="card-header">
                                <h3 class="card-title">CATATAN PINJAMAN</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-info">
                                            <tr>
                                                <th scope="col">No. Pinjaman</th>
                                                <th scope="col">Tgl. Pencairan</th>
                                                <th scope="col">Besar Pinjaman</th>
                                                <th scope="col">Jangka Waktu</th>
                                                <th scope="col">Tingkat Bunga</th>
                                                <th scope="col">Jenis Pinjaman</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Saldo</th>
                                                <th scope="col">Status</th>
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
                                                <th rowspan="2"  class="align-middle">TANGGAL</th>
                                                <th rowspan="2" class="align-middle">SANDI</th>
                                                <th colspan="2" class="text-center">MUTASI</th>
                                                <th rowspan="2" class="align-middle">SALDO</th>
                                                <th rowspan="2" class="align-middle">KET.</th>
                                                <th rowspan="2" class="align-middle">PETUGAS</th>
                                            </tr>
                                            <tr>
                                                <th>SETOR</th>
                                                <th>TARIK</th>
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
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card card-gray-dark">
                            <div class="card-header">
                            <h3 class="card-title">
                                DATA ANGGOTA</h3>
                            </div>
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Tanggal Pendaftaran</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Tipe Anggota</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipe_anggota" id="tipe_anggota" value="Anggota Biasa">
                                                <label class="form-check-label" for="tipe_anggota">
                                                    Anggota Biasa
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipe_anggota" id="tipe_anggota" value="Anggota Luar Biasa">
                                                <label class="form-check-label" for="tipe_anggota">
                                                    Anggota Luar Biasa
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipe_anggota" id="tipe_anggota" value="Anggota Luar Biasa">
                                                <label class="form-check-label" for="tipe_anggota">
                                                    Anggota Organisasi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Status Anggota</label>
                                        <div class="col-sm-9">
                                            <select class="form-select form-select" name="agama" id="agama">
                                                <option selected>--- Pilih ---</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Alasan Pengunduran Diri/Keterangan</label>
                                        <div class="col-sm-9">
                                              <textarea class="form-control" name="" id="" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Tampilkan</button>
                                </div>
                            </form>
                        </div>
                        <div class="card card-gray-dark">
                            <div class="card-header">
                                <h3 class="card-title">HISTORI TRANSAKSI [] s.d. []</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-info">
                                            <tr>
                                                <th scope="col">NO.</th>
                                                <th scope="col">TANGGAL (YYYY-MM-DD)</th>
                                                <th scope="col">SANDI</th>
                                                <th scope="col">MUTASI</th>
                                                <th scope="col">KETERANGAN</th>
                                                <th scope="col">Tambah <div class="form-check">
                                                    <input class="form-check-input" name="" id="" type="checkbox" value="checkedValue" aria-label="Text for screen reader">
                                                </div></th>
                                                <th scope="col">Ubah / Hapus <div class="form-check">
                                                    <input class="form-check-input" name="" id="" type="checkbox" value="checkedValue" aria-label="Text for screen reader">
                                                </div></th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-bordered">
                                            <tr class="">
                                                <td scope="row"></td>
                                                <td><div class="col"><input type="text" name="" id="" class="form-control"></div></td>
                                                <td><div class="col"><input type="text" name="" id="" class="form-control"></div></td>
                                                <td><div class="col"><input type="text" name="" id="" class="form-control"></div></td>
                                                <td><div class="col"><input type="text" name="" id="" class="form-control"></div></td>
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
                                                <td colspan="7">
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
                        <div class="card card-gray-dark">
                            <div class="card-header">
                                <h3 class="card-title">HISTORI TRANSAKSI BUKU BESAR[]</h3>
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
