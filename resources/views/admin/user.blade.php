@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Daftar Pengguna</h1>
                <div class="float-left pt-2">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="user" class="text-muted">Data Pengguna</a></li>
                      <li class="breadcrumb-item active"><a href="user_group">Akses Group Pengguna</a></li>
                      <li class="breadcrumb-item active"><a href="user_cashier">Kasir : Akses Tanggal</a></li>
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
                   <h3 class="card-title font-weight-bold">Data Pengguna</h3>
               </div>
               <div class="card-body">
                   <div class="table-responsive">
                       <div class="table-responsive">
                           <table class="table">
                               <thead class="bg-info">
                                   <tr>
                                       <th scope="col">View</th>
                                       <th scope="col">Edit</th>
                                       <th scope="col">ID - Username</th>
                                       <th scope="col">Nama Lengkap</th>
                                       <th scope="col">Group Pengguna</th>
                                       <th scope="col">User Status</th>
                                       <th scope="col">Kategori</th>
                                       <th scope="col">Login Status</th>
                                       <th scope="col">Pilih</th>
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
                                       <td ><input type="checkbox" value="" id=""></td>
                                   </tr>
                               </tbody>
                               <tfoot class="table-bordered bg-info">
                                    <tr>
                                        <td colspan="9">
                                            <a class="btn btn-danger btn-sm float-right" href="#" role="button">Hapus</a>
                                        </td>
                                    </tr>
                               </tfoot>
                           </table>
                       </div>

                   </div>

               </div>
           </div>
        </section>
      </div>
    @endsection
