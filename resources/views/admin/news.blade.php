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
                      <li class="breadcrumb-item"><a href="news" class="text-muted">Siaran Berita</a></li>
                      <li class="breadcrumb-item active"><a href="news_admin">Admin</a></li>
                    </ol>
                  </div>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item "><a href="#">Admin</a></li>
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
                    <h3 class="card-title font-weight-bold">Berita</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td class="col-2 bg-info font-weight-bold">Kategori</td>
                                <td>ini kategori</td>
                            </tr>
                            <tr>
                                <td class="col-2 bg-info font-weight-bold">Judul</td>
                                <td>ini Judul</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card card-gray-dark">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">Arsip Berita BeUNION 3.3</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="col-4 bg-info font-weight-bold">Judul</td>
                                        <td>ini Judul</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-gray-dark">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">Arsip Berita BeUNION 3.3</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="col-4 bg-info font-weight-bold">Judul</td>
                                        <td>ini Judul</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="accordion">
                <div class="card card-gray-dark">
                  <div class="card-header " id="headingOne">
                    <h5 class="mb-0 font-weight-bold">
                      <button class="btn font-weight-bold text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Arsip Berita
                      </button>
                    </h5>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card card-gray-dark">
                       <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col">View</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Pengirim</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-bordered">
                                        <tr class="">
                                            <td scope="row"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr class="">
                                            <td scope="row"></td>
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

        </section>
      </div>
    @endsection
