@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Daftar Segmentasi Anggota</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Laporan</li>
                    <li class="breadcrumb-item"><a href="#">Segmentasi Anggota</a></li>
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
                               <h3 class="card-title font-weight-bold">SEGMENTASI ANGGOTA BERDASARKAN</h3>
                           </div>
                           <div class="card-body">
                               <div class="table-responsive">
                                   <div class="table-responsive">
                                       <table class="table table-bordered table-sm">
                                           <tbody class="table-bordered">
                                               <tr class="">
                                                   <td class="col-1">1</td>
                                                   <td></td>
                                                   <td class="col-1"></td>
                                               </tr>
                                               <tr class="">
                                                <td class="col-1">2</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <td>3</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr class="">
                                                <td>4</td>
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
