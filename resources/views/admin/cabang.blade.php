@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Daftar Cabang Link.</h1>
                <div class="float-left pt-2">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="user" class="text-muted">Daftar Cabang</a></li>
                      <li class="breadcrumb-item active"><a href="add_cabang">Tambah Cabang</a></li>
                    </ol>
                  </div>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Daftar Cabang Link.</a></li>
                    <li class="breadcrumb-item active">Daftar Cabang</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card card-gray-dark">
                <div class="card-header">
                   <h3 class="card-title font-weight-bold">Data</h3>
               </div>
               <div class="card-body">
                   <div class="table-responsive">
                       <div class="table-responsive">
                           <table class="table">
                               <thead class="bg-info">
                                   <tr>
                                       <th scope="col">Kode</th>
                                       <th scope="col">Nama</th>
                                       <th scope="col">Jumlah Anggota</th>
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
        </section>
      </div>
    @endsection
