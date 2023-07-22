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
                      <li class="breadcrumb-item active"><a href="account_edit"  class="text-muted">Edit Kode Akun</a></li>
                      <li class="breadcrumb-item active"><a href="account_balance">Set Saldo Awal</a></li>
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
                   <h3 class="card-title font-weight-bold">Seleksi Data</h3>
               </div>
               <div class="card-body">
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Akun Induk</label>
                        <div class="col-sm-9">
                            <select class="form-select form-select" name="pekerjaan" id="pekerjaan">
                                <option selected>--- Pilih ---</option>
                                <option label="0 - AKUN INDUK" value="0@0@0">0 - AKUN INDUK</option>
                                <option label="1 - AKTIVA" value="1@1@1">1 - AKTIVA</option>
                                <option label="11 - AKTIVA LANCAR" value="11@2@1">11 - AKTIVA LANCAR</option>
                                <option label="110 - KAS" value="110@3@1">110 - KAS</option>
                                <option label="111 - GIRO POS" value="111@3@1">111 - GIRO POS</option>
                                <option label="112 - BANK" value="112@3@1">112 - BANK</option>
                                <option label="113 - TABUNGAN DAN DEPOSITO" value="113@3@1">113 - TABUNGAN DAN DEPOSITO</option>
                                <option label="114 - SURAT BERHARGA" value="114@3@1">114 - SURAT BERHARGA</option>
                                <option label="115 - PIUTANG KPD. ANGGOTA" value="115@3@1">115 - PIUTANG KPD. ANGGOTA</option>
                                <option label="116 - PIUTANG KPD. NON ANGGOTA" value="116@3@1">116 - PIUTANG KPD. NON ANGGOTA</option>
                                <option label="117 - PIUTANG SILANG PINJAM" value="117@3@1">117 - PIUTANG SILANG PINJAM</option>
                                <option label="118 - PIUTANG LAIN-LAIN" value="118@3@1">118 - PIUTANG LAIN-LAIN</option>
                                <option label="119 - TRANSITORIS DAN ANTISIPASI AKTIVA" value="119@3@1">119 - TRANSITORIS DAN ANTISIPASI AKTIVA</option>
                                <option label="12 - PENYERTAAN DAN INVESTASI JANGKA PANJANG" value="12@2@1">12 - PENYERTAAN DAN INVESTASI JANGKA PANJANG</option>
                                <option label="120 - PENYERTAAN PADA ORG. KOPERASI TK. ATAS" value="120@3@1">120 - PENYERTAAN PADA ORG. KOPERASI TK. ATAS</option>
                                <option label="121 - INVESTASI JANGKA PANJANG" value="121@3@1">121 - INVESTASI JANGKA PANJANG</option>
                                <option label="13 - AKTIVA TETAP" value="13@2@1">13 - AKTIVA TETAP</option>
                                <option label="130 - TANAH" value="130@3@1">130 - TANAH</option>
                                <option label="131 - BANGUNAN" value="131@3@1">131 - BANGUNAN</option>
                                <option label="132 - MESIN-MESIN" value="132@3@1">132 - MESIN-MESIN</option>
                                <option label="133 - KENDARAAN" value="133@3@1">133 - KENDARAAN</option>
                                <option label="134 - PERLENGKAPAN" value="134@3@1">134 - PERLENGKAPAN</option>
                                <option label="135 - AKTIVA TETAP LAIN" value="135@3@1">135 - AKTIVA TETAP LAIN</option>
                                <option label="136 - AKTIVA TIDAK BERWUJUD" value="136@3@1">136 - AKTIVA TIDAK BERWUJUD</option>
                                <option label="137 - PERALATAN" value="137@3@1">137 - PERALATAN</option>
                                <option label="139 - AKTIVA LAIN-LAIN" value="139@3@1">139 - AKTIVA LAIN-LAIN</option>
                                <option label="2 - KEWAJIBAN" value="2@1@2">2 - KEWAJIBAN</option>
                                <option label="21 - KEWAJIBAN" value="21@2@2">21 - KEWAJIBAN</option>
                                <option label="210 - HUTANG JANGKA PENDEK KPD. ANGGOTA" value="210@3@2">210 - HUTANG JANGKA PENDEK KPD. ANGGOTA</option>
                                <option label="211 - HUTANG JANGKA PENDEK KPD. NON ANGGOTA" value="211@3@2">211 - HUTANG JANGKA PENDEK KPD. NON ANGGOTA</option>
                                <option label="212 - HUTANG JANGKA PENDEK KPD. ORG. KOPERASI TK. ATAS" value="212@3@2">212 - HUTANG JANGKA PENDEK KPD. ORG. KOPERASI TK. ATAS</option>
                                <option label="213 - HUTANG SILANG PINJAM" value="213@3@2">213 - HUTANG SILANG PINJAM</option>
                                <option label="214 - DANA DAN BAGIAN PERHITUNGAN HASIL USAHA" value="214@3@2">214 - DANA DAN BAGIAN PERHITUNGAN HASIL USAHA</option>
                                <option label="215 - TRANSITORIS DAN ANTISIPASI PASIVA" value="215@3@2">215 - TRANSITORIS DAN ANTISIPASI PASIVA</option>
                                <option label="216 - HUTANG JANGKA PANJANG KPD. ANGGOTA" value="216@3@2">216 - HUTANG JANGKA PANJANG KPD. ANGGOTA</option>
                                <option label="217 - HUTANG JANGKA PANJANG KPD. NON ANGGOTA" value="217@3@2">217 - HUTANG JANGKA PANJANG KPD. NON ANGGOTA</option>
                                <option label="218 - HUTANG JANGKA PANJANG KPD ORG. KOPERASI TK. ATAS" value="218@3@2">218 - HUTANG JANGKA PANJANG KPD ORG. KOPERASI TK. ATAS</option>
                                <option label="219 - HUTANG LAIN-LAIN" value="219@3@2">219 - HUTANG LAIN-LAIN</option>
                                <option label="3 - EKUITAS" value="3@1@3">3 - EKUITAS</option>
                                <option label="31 - EKUITAS" value="31@2@3">31 - EKUITAS</option>
                                <option label="310 - SIMPANAN ANGGOTA" value="310@3@3">310 - SIMPANAN ANGGOTA</option>
                                <option label="311 - SIMPANAN GERAKAN KOPDIT INDONESIA" value="311@3@3">311 - SIMPANAN GERAKAN KOPDIT INDONESIA</option>
                                <option label="312 - HIBAH" value="312@3@3">312 - HIBAH</option>
                                <option label="313 - SELISIH PENILAIAN KEMBALI" value="313@3@3">313 - SELISIH PENILAIAN KEMBALI</option>
                                <option label="314 - CADANGAN" value="314@3@3">314 - CADANGAN</option>
                                <option label="315 - PERHITUNGAN HASIL USAHA" value="315@3@3">315 - PERHITUNGAN HASIL USAHA</option>
                                <option label="4 - PENDAPATAN" value="4@1@4">4 - PENDAPATAN</option>
                                <option label="41 - PENDAPATAN" value="41@2@4">41 - PENDAPATAN</option>
                                <option label="410 - PENDAPATAN USAHA" value="410@3@4">410 - PENDAPATAN USAHA</option>
                                <option label="411 - PENDAPATAN BUKAN USAHA" value="411@3@4">411 - PENDAPATAN BUKAN USAHA</option>
                                <option label="5 - BEBAN USAHA" value="5@1@5">5 - BEBAN USAHA</option>
                                <option label="51 - BEBAN USAHA" value="51@2@5">51 - BEBAN USAHA</option>
                                <option label="510 - BEBAN USAHA" value="510@3@5">510 - BEBAN USAHA</option>
                                <option label="6 - BEBAN BUKAN USAHA" value="6@1@6">6 - BEBAN BUKAN USAHA</option>
                                <option label="61 - BEBAN BUKAN USAHA" value="61@2@6">61 - BEBAN BUKAN USAHA</option>
                                <option label="610 - BEBAN ORGANISASI" value="610@3@6">610 - BEBAN ORGANISASI</option>
                                <option label="611 - BEBAN MANAGEMENT" value="611@3@6">611 - BEBAN MANAGEMENT</option>
                                <option label="612 - BEBAN ADMINISTRASI DAN UMUM" value="612@3@6">612 - BEBAN ADMINISTRASI DAN UMUM</option>
                                <option label="613 - BEBAN PENYUSUTAN" value="613@3@6">613 - BEBAN PENYUSUTAN</option>
                                <option label="614 - BEBAN BUKAN USAHA" value="614@3@6">614 - BEBAN BUKAN USAHA</option>
                                <option label="615 - BEBAN SOLIDARITAS PUSKOPDIT" value="615@3@6">615 - BEBAN SOLIDARITAS PUSKOPDIT</option>
                                <option label="616 - BEBAN PHU" value="616@3@6">616 - BEBAN PHU</option>
                                <option label="619 - BEBAN LAIN-LAIN" value="619@3@6">619 - BEBAN LAIN-LAIN</option>
                                <option label="7 - PAJAK" value="7@1@7">7 - PAJAK</option>
                                <option label="71 - PAJAK" value="71@2@7">71 - PAJAK</option>
                                <option label="710 - Pajak Penghasilan" value="710@3@7">710 - Pajak Penghasilan</option>
                            </select>
                        </div>
                    </div>
               </div>
               <div class="card-footer">
                    <div class="float-right">
                        <button type="submit" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </div>
            <div class="card card-gray-dark">
                <div class="card-header">
                   <h3 class="card-title font-weight-bold">Hasil Pencarian Data</h3>
               </div>
               <div class="card-body">
                   <div class="table-responsive">
                       <div class="table-responsive">
                           <table class="table">
                               <tbody>
                                   <tr>
                                       <th scope="col" class="bg-info col-2">Akun Induk</th>
                                       <td scope="col">0</td>
                                       <th scope="col" class="bg-info col-2">Kelompok Neraca</th>
                                       <td scope="col">-</td>
                                   </tr>
                                   <tr>
                                    <th scope="col" class="bg-info">Level Akun</th>
                                    <td scope="col">0</td>
                                    <th scope="col" class="bg-info">Saldo Normal</th>
                                    <td scope="col">-</td>
                                </tr>
                               </tbody>
                           </table>
                       </div>
                    </div>
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
                                    <th scope="col">Edit</th>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Kode Akun</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Saldo Normal</th>
                                    <th scope="col">Tipe Akun</th>
                                    <th scope="col">Pilih</th>
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
                                    <td class="text-center" ><input type="radio" value="" id=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger float-right">Delete</button>
                </div>
            </div>
            <div class="card card-gray-dark">
                <div class="card-header">
                    <h3 class="card-title">Personal</h3>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Nomor</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="nama" placeholder="Masukan Nomor" name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_gelar" name="nama_gelar" placeholder="Masukan Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Tipe Akun (Group /  Transaksi)</label>
                        <div class="col-sm-9">
                            <select class="form-select form-select" name="agama" id="agama">
                                <option selected>--- Pilih ---</option>
                                <option value="Islam">GRP</option>
                                <option value="Katolik">TRX</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-3 col-form-label">Saldo Normal</label>
                        <div class="col-sm-9">
                            <input type="radio" checked>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success float-right">Tambah Data</button>
                </div>
            </div>
        </section>
      </div>
    @endsection
