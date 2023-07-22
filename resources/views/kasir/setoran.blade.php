@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-5">
                <h1>Setoran Anggota </h1>
              </div>
              <div class="col-sm-7">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Kasir/Keuangan</li>
                    <li class="breadcrumb-item"><a href="#"> Setoran Anggota  </a></li>
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
                                        <label for="inputtext3" class="col-sm-4 col-form-label">ID Anggota</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan ID Anggota">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="inputtext3" class="col-form-label text-danger">Cari Anggota...</label>
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
                                <h3 class="card-title">DATA INSTRUKTUR</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-info">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">NBA</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Tgl. Pendaftaran</th>
                                                <th scope="col">Umur</th>
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
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card card-gray-dark">
                            <div class="card-header">
                                <h3 class="card-title">DATA ANGGOTA</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">NBA</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly  class="form-control" id="nama_kantor" name="nama_kantor" placeholder="Masukan Nama Kantor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Tipe Anggota</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="alamat_kantor" name="alamat_kantor" placeholder="Masukan Alamat Kantor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Kartu ID / Nomor</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="kota_kantor" name="kota_kantor" placeholder="Masukan Kota Kantor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Nama</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="kode_poskantor" name="kode_poskantor" placeholder="Masukan Kode Pos Kantor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Tempat / Tgl. Lahir</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="kode_poskantor" name="kode_poskantor" placeholder="Masukan Kode Pos Kantor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Jenis Kelamin / Status</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="nama_kantor" name="nama_kantor" placeholder="Masukan Nama Kantor" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Alamat (ID)</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="alamat_kantor" name="alamat_kantor" placeholder="Masukan Alamat Kantor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Alamat (Sekarang)</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="kota_kantor" name="kota_kantor" placeholder="Masukan Kota Kantor">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Cabang</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="nama_kantor" name="nama_kantor" placeholder="Masukan Nama Kantor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Lingkungan</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="alamat_kantor" name="alamat_kantor" placeholder="Masukan Alamat Kantor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Phone / HP</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="kota_kantor" name="kota_kantor" placeholder="Masukan Kota Kantor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Tk. Pendidikan / Pekerjaan</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="kode_poskantor" name="kode_poskantor" placeholder="Masukan Kode Pos Kantor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Nama Kantor</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="nama_kantor" name="nama_kantor" placeholder="Masukan Nama Kantor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Alamat (Kantor)</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="alamat_kantor" name="alamat_kantor" placeholder="Masukan Alamat Kantor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Penghasilan Bulanan</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="kota_kantor" name="kota_kantor" placeholder="Masukan Kota Kantor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-5 col-form-label">Tgl. Pendaftaran / Status</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control" id="kode_poskantor" name="kode_poskantor" placeholder="Masukan Kode Pos Kantor">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-gray-dark">
                            <div class="card-header">
                               <h3 class="card-title font-weight-bold">KARTU SIMPANAN DAN PINJAMAN ANGGOTA (KSPA)</h3>
                           </div>
                           <div class="card-body">
                               <div class="table-responsive">
                                   <div class="table-responsive">
                                       <table class="table table-bordered table-sm">
                                           <thead class="bg-info">
                                               <tr>
                                                   <th scope="col" rowspan="3" class="align-middle">Tanggal</th>
                                                   <th scope="col" colspan="8">SIMPANAN</th>
                                                   <th scope="col" colspan="6">PINJAMAN</th>
                                               </tr>
                                                <tr>
                                                    <th scope="col" colspan="2">Disetor</th>
                                                    <th scope="col" colspan="2">Ditarik</th>
                                                    <th scope="col" colspan="2">Saldo</th>
                                                    <th scope="col" rowspan="2" class="align-middle">Jumlah</th>
                                                    <th scope="col" rowspan="2" class="align-middle">Saham</th>
                                                    <th scope="col" rowspan="2" class="align-middle">No. Pinjaman</th>
                                                    <th scope="col" rowspan="2" class="align-middle">Pinjaman</th>
                                                    <th scope="col" rowspan="2" class="align-middle">Bunga</th>
                                                    <th scope="col" rowspan="2" class="align-middle">Angsuran</th>
                                                    <th scope="col" rowspan="2" class="align-middle">Saldo</th>
                                                    <th scope="col" rowspan="2" class="align-middle">Denda</th>

                                                </tr>
                                                <tr>
                                                    <th scope="col">SP/SW</th>
                                                    <th scope="col">SS</th>
                                                    <th scope="col">SP/SW</th>
                                                    <th scope="col">SS</th>
                                                    <th scope="col">SP/SW</th>
                                                    <th scope="col">SS</th>
                                                </tr>
                                           </thead>
                                           <tbody class="table-bordered">
                                               <tr class="">
                                                   <td scope="row"></td>
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
                               <h3 class="card-title font-weight-bold">KARTU SIMPANAN DAN PINJAMAN ANGGOTA (KSPA)</h3>
                           </div>
                           <div class="card-body">
                               <div class="table-responsive">
                                   <div class="table-responsive">
                                       <table class="table table-bordered table-sm">
                                           <thead class="bg-info">
                                                <tr>
                                                    <th colspan="4">SALDO SIMPANAN SAHAM, SIMPANAN NON SAHAM, PINJAMAN DLL.</th>
                                                </tr>
                                                <tr>
                                                    <th>Simpanan Pokok</th>
                                                    <td>-------</td>
                                                    <th>Uang Pangkal</th>
                                                    <td>-------</td>
                                                </tr>
                                                <tr>
                                                    <th>Simpanan Wajib</th>
                                                    <td>-------</td>
                                                    <th>DAKESMA / DASOSKEM</th>
                                                    <td>-------</td>
                                                </tr>
                                                <tr>
                                                    <th>Simpanan Sukarela</th>
                                                    <td>-------</td>
                                                    <th>SW Thn. Ini / Tunggakan</th>
                                                    <td>-------</td>
                                                </tr>
                                                <tr>
                                                    <th>Rekening SIBUHA</th>
                                                    <td>-------</td>
                                                    <th colspan="2"></th>
                                                </tr>
                                                <tr>
                                                    <th>Rekening SISUKA</th>
                                                    <td>-------</td>
                                                    <th colspan="2"></th>
                                                </tr>
                                                <tr>
                                                    <th>Rekening KREDIT</th>
                                                    <td>-------</td>
                                                    <th colspan="2"></th>
                                                </tr>
                                           </thead>
                                           <tbody class="table-bordered">
                                               <tr class="">
                                                   <td scope="row"></td>
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
                               <h3 class="card-title font-weight-bold">CATATAN PINJAMAN</h3>
                           </div>
                           <div class="card-body">
                               <div class="table-responsive">
                                   <div class="table-responsive">
                                       <table class="table table-bordered table-sm">
                                           <thead class="bg-info">
                                                <th>No. Pinjaman</th>
                                                <th>Tgl. Pencairan</th>
                                                <th>Besar Pinjaman</th>
                                                <th>Jangka Waktu</th>
                                                <th>Tingkat Bunga</th>
                                                <th>Jenis Pinjaman</th>
                                                <th>Kategori</th>
                                                <th>Saldo</th>
                                                <th>Status</th>
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
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>

                        </div>
                        <div class="card card-gray-dark">
                            <div class="card-header">
                               <h3 class="card-title font-weight-bold">REKENING KREDIT AKTIF</h3>
                           </div>
                           <div class="card-body">
                               <div class="table-responsive">
                                   <div class="table-responsive">
                                       <table class="table table-bordered table-sm">
                                           <thead class="bg-info">
                                                <tr>
                                                    <th colspan="4">DATA REKENING KREDIT - NOREK : </th>
                                                </tr>
                                                <tr>
                                                    <th>Tgl. Pendaftaran</th>
                                                    <td>-------</td>
                                                    <th>Bunga / Waktu / Angsuran</th>
                                                    <td>-------</td>
                                                </tr>
                                                <tr>
                                                    <th>Tgl. Persetujuan / Status Kredit</th>
                                                    <td>-------</td>
                                                    <th>Agunan / Nilai Agunan (Rp)</th>
                                                    <td>-------</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>-------</td>
                                                    <th>Agunan Saham/Rekening</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <th>Jumlah Permohonan Kredit (Rp)</th>
                                                    <td>-------</td>
                                                    <th>Keperluan / Kategori Kredit</th>
                                                    <td>-------</td>
                                                </tr>
                                                <tr>
                                                    <th>Saldo Kredit (Rp)</th>
                                                    <td>-------</td>
                                                    <th>Tipe Kredit</th>
                                                    <td></td>
                                                </tr>
                                           </thead>
                                           <tbody class="table-bordered">
                                               <tr class="">
                                                   <td scope="row"></td>
                                                   <td></td>
                                                   <td></td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>

                        </div> --}}
                </div>
            </div>
        </section>
    </div>
@endsection
