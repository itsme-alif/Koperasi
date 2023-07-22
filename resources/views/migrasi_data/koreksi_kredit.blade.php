@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-5">
                <h1>Kredit</h1>
              </div>
              <div class="col-sm-7">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Koreksi Migrasi Data</li>
                    <li class="breadcrumb-item"><a href="#">Kredit</a></li>
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
                                        <label for="inputtext3" class="col-sm-2 col-form-label">Norek Kredit</label>
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
                                <h3 class="card-title">DATA PERMOHONAN KREDIT</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody class="table-bordered">
                                            <tr class="">
                                                <th class="col-3">Nomor Kredit</th>
                                                <td class="col-3"></td>
                                                <th>Uang Pangkal</th>
                                                <td class="col-3"></td>
                                            </tr>
                                            <tr class="">
                                                <th>Tgl. Pendaftaran</th>
                                                <td></td>
                                                <th>Bunga / Waktu / Angsuran</th>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <th>Tgl. Persetujuan / Status Kredit</th>
                                                <td></td>
                                                <th>Agunan / Nilai Agunan (Rp)</th>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <th>Jumlah Permohonan Kredit (Rp)</th>
                                                <td></td>
                                                <th>Keperluan Kredit</th>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <th>Saldo Kredit (Rp)</th>
                                                <td></td>
                                                <th>Kategori Kredit</th>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
                                                <th rowspan="2" class="align-middle">NO.</th>
                                                <th rowspan="2"  class="align-middle">TANGGAL</th>
                                                <th rowspan="2" class="align-middle">SANDI</th>
                                                <th colspan="2" class="text-center">MUTASI</th>
                                                <th rowspan="2" class="align-middle">SALDO</th>
                                                <th rowspan="2" class="align-middle">KET.</th>
                                                <th rowspan="2" class="align-middle">PETUGAS</th>
                                            </tr>
                                            <tr>
                                                <th>POKOK</th>
                                                <th>LAIN-LAIN</th>
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
                            <h3 class="card-title">PENDAFTARAN REKENING SISUKA</h3>
                            </div>
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Tanggal Persetujuan</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Jumlah Permohonan Kredit (Rp)</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Tingkat Bunga (per Bulan)</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipe_anggota" id="tipe_anggota" value="Anggota Biasa">
                                                <label class="form-check-label" for="tipe_anggota">
                                                    2.5%
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipe_anggota" id="tipe_anggota" value="Anggota Luar Biasa">
                                                <label class="form-check-label" for="tipe_anggota">
                                                    2.0%
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipe_anggota" id="tipe_anggota" value="Anggota Luar Biasa">
                                                <label class="form-check-label" for="tipe_anggota">
                                                    1.265%
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipe_anggota" id="tipe_anggota" value="Anggota Luar Biasa">
                                                <label class="form-check-label" for="tipe_anggota">
                                                    2.3%
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Jangka Waktu (Bulan)</label>
                                        <div class="col-sm-9">
                                            <select class="form-select form-select" name="agama" id="agama">
                                                <option selected>--- Pilih ---</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Agunan (opt)</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="" id="" rows="3"></textarea>                                </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Nilai Agunan (Rp) (opt)</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Agunan Saham</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Keperluan Kredit (opt)</label>
                                        <div class="col-sm-9">
                                              <textarea class="form-control" name="" id="" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Status Kredit</label>
                                        <div class="col-sm-9">
                                            <select class="form-select form-select" name="agama" id="agama">
                                                <option selected>--- Pilih ---</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Ubah Data</button>
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
                </div>
            </div>
        </section>
    </div>
@endsection
