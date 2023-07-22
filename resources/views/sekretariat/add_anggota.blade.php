@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Pendaftaran Anggota</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Sekretariat</a></li>
                  <li class="breadcrumb-item active">Pendaftaran Anggota</li>
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

                <!-- /.card -->
                <div class="card card-gray-dark">
                    <div class="card-header">
                      <h3 class="card-title">Tanggal & Tempat Pendaftaran</h3>
                    </div>
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputtext3" class="col-sm-3 col-form-label">Tanggal Pendaftaran</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext3" class="col-sm-3 col-form-label">Cabang - Lingkungan</label>
                            <div class="col-sm-6">
                                <select class="form-select form-select" name="cabang" id="cabang">
                                    <option selected>--- Pilih ---</option>
                                    <option value="">New Delhi</option>
                                    <option value="">Istanbul</option>
                                    <option value="">Jakarta</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-select form-select" name="lingkungan" id="">
                                    <option selected>--- Pilih ---</option>
                                    <option value="">New Delhi</option>
                                    <option value="">Istanbul</option>
                                    <option value="">Jakarta</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    </div>
                        <div class="card card-gray-dark">
                            <div class="card-header">
                                <h3 class="card-title">Personal</h3>
                            </div>
                            <div class="card-body">
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
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Nama Gelar</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_gelar" name="nama_gelar" placeholder="Masukan Nama Gelar">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                                        </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Pria">
                                            <label class="form-check-label" for="jenis_kelamin">
                                                Pria
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Wanita">
                                            <label class="form-check-label" for="jenis_kelamin">
                                                Wanita
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Status Perkawinan</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="status" value="Belum Menikah">
                                            <label class="form-check-label" for="status">
                                                Belum Menikah
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="status" value="Menikah">
                                            <label class="form-check-label" for="status">
                                                Menikah
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="status" value="Janda / Duda">
                                            <label class="form-check-label" for="status">
                                                Duda / Janda
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Tingkat Pendidikan</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan"  value="SD">
                                            <label class="form-check-label" for="pendidikan">
                                                SD
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan" value="SMP">
                                            <label class="form-check-label" for="pendidikan">
                                                SMP
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan"  value="SMA / SMK">
                                            <label class="form-check-label" for="pendidikan">
                                                SMA / SMK
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan"  value="Diploma">
                                            <label class="form-check-label" for="pendidikan">
                                                Diploma
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan"  value="S1">
                                            <label class="form-check-label" for="pendidikan">
                                                S1
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan"  value="S2">
                                            <label class="form-check-label" for="pendidikan">
                                                S2
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan"  value="S3">
                                            <label class="form-check-label" for="pendidikan">
                                                S3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <select class="form-select form-select" name="agama" id="agama">
                                            <option selected>--- Pilih ---</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Konghucu">Konghucu</option>
                                            <option value="Penghayat">Penghayat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Nama Ahli Waris / Hubungan</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputtext3" placeholder="Masukan Nama">
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-select form-select" name="ahli_waris" id="ahli_waris">
                                            <option selected>--- Pilih ---</option>
                                            <option label="Suami/Istri" value="Suami/Istri">Suami/Istri</option>
                                            <option label="Anak" value="Anak">Anak</option>
                                            <option label="Saudara Sepupu" value="Saudara Sepupu">Saudara Sepupu</option>
                                            <option label="Saudara Orang Tua" value="Saudara Orang Tua">Saudara Orang Tua</option>
                                            <option label="Kakek/Nenek" value="Kakek/Nenek">Kakek/Nenek</option>
                                            <option label="Saudara Kakek/Nenek" value="Saudara Kakek/Nenek">Saudara Kakek/Nenek</option>
                                            <option label="Saudara Kandung" value="Saudara Kandung">Saudara Kandung</option>
                                            <option label="Orang Tua" value="Orang Tua">Orang Tua</option>
                                            <option label="Kakak Ipar" value="Kakak Ipar">Kakak Ipar</option>
                                            <option label="Keponakan" value="Keponakan">Keponakan</option>
                                            <option label="Calon suami" value="Calon suami">Calon suami</option>
                                            <option label="Calon istri" value="Calon istri">Calon istri</option>
                                            <option label="Cucu" value="Cucu">Cucu</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card card-gray-dark">
                            <div class="card-header">
                                <h3 class="card-title">Identitas & Alamat</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Nomor KK</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="no_kk" name="no_kk" placeholder="Masukan Nomor KK">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Nomor KTP</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="no_ktp" name="no_ktp" placeholder="Masukan Nomor Ktp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Nomor KTP (2) (Untuk Anggota Organisasi)</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="no_ktp2" name="no_ktp2" placeholder="Masukan Nomor KTP 2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Alamat (ID)</label>
                                    <div class="col-sm-9">
                                          <textarea class="form-control" name="alamat_id" id="alamat_id" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Kota (ID)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="kota_id" name="kota_id" placeholder="Masukan Kota">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Kode Pos (ID)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="kode_posid" name="kode_posid" placeholder="Masukan Kode Pos">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Alamat (Tinggal)</label>
                                    <div class="col-sm-9">
                                          <textarea class="form-control" name="alamat_tinggal" id="alamat_tinggal" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Kota (Tinggal)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="kota_tinggal" name="kota_tinggal" placeholder="Masukan Kota">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Kode Pos (Tinggal)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="kode_postinggal" name="kode_postinggal" placeholder="Masukan Kode Pos">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" placeholder="Masukan Phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">No.Hp</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" placeholder="Masukan Nomor Hp">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-gray-dark">
                            <div class="card-header">
                                <h3 class="card-title">Pekerjaan</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-9">
                                        <select class="form-select form-select" name="pekerjaan" id="pekerjaan">
                                            <option selected>--- Pilih ---</option>
                                            <option label="Pegawai Negeri" value="Pegawai Negeri">Pegawai Negeri</option>
                                            <option label="Pegawai Swasta" value="Pegawai Swasta">Pegawai Swasta</option>
                                            <option label="Wiraswasta" value="Wiraswasta">Wiraswasta</option>
                                            <option label="Professional" value="Professional">Professional</option>
                                            <option label="Ibu Rumah Tangga" value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                            <option label="Mahasiswa" value="Mahasiswa">Mahasiswa</option>
                                            <option label="Pelajar" value="Pelajar">Pelajar</option>
                                            <option label="Pedagang" value="Pedagang">Pedagang</option>
                                            <option label="Petani" value="Petani">Petani</option>
                                            <option label="Guru" value="Guru">Guru</option>
                                            <option label="Kepala Sekolah" value="Kepala Sekolah">Kepala Sekolah</option>
                                            <option label="Guru Honor" value="Guru Honor">Guru Honor</option>
                                            <option label="Karyawan Swasta" value="Karyawan Swasta">Karyawan Swasta</option>
                                            <option label="Pensiunan" value="Pensiunan">Pensiunan</option>
                                            <option label="Polri" value="Polri">Polri</option>
                                            <option label="TNI" value="TNI">TNI</option>
                                            <option label="Medis" value="Medis">Medis</option>
                                            <option label="Buruh Harian Lepas" value="Buruh Harian Lepas">Buruh Harian Lepas</option>
                                            <option label="Ikut Orang Tua" value="Ikut Orang Tua">Ikut Orang Tua</option>
                                            <option label="Supir" value="Supir">Supir</option>
                                            <option label="Belum/Tidak Bekerja" value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                                            <option label="Dosen" value="Dosen">Dosen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Nama Kantor</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_kantor" name="nama_kantor" placeholder="Masukan Nama Kantor">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Alamat Kantor</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="alamat_kantor" name="alamat_kantor" placeholder="Masukan Alamat Kantor">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Kota Kantor</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="kota_kantor" name="kota_kantor" placeholder="Masukan Kota Kantor">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Kode Pos Kantor</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="kode_poskantor" name="kode_poskantor" placeholder="Masukan Kode Pos Kantor">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-3 col-form-label">Penghasilan</label>
                                    <div class="col-sm-9">
                                        <select class="form-select form-select" name="penghasilan" id="penghasilan">
                                            <option selected>--- Pilih ---</option>
                                            <option label="&lt; 1.500.000 (Rp)" value="&lt; 1.500.000 (Rp)">&lt; 1.500.000 (Rp)</option>
                                            <option label="1.600.000 - 2.000.000 (Rp)" value="1.600.000 - 2.000.000 (Rp)">1.600.000 - 2.000.000 (Rp)</option>
                                            <option label="2.100.000 - 4.000.000 (Rp)" value="2.100.000 - 4.000.000 (Rp)">2.100.000 - 4.000.000 (Rp)</option>
                                            <option label="4.100.000 - 5.000.000 (Rp)" value="4.100.000 - 5.000.000 (Rp)">4.100.000 - 5.000.000 (Rp)</option>
                                            <option label="&gt; 10.000.000 (Rp)" value="&gt; 10.000.000 (Rp)">&gt; 10.000.000 (Rp)</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                                </div>
                        </div>
                </form>

                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>


    @endsection
