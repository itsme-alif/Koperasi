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

                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title float-right">
                        <a href="add_anggota" id="createData" rel="noopener noreferrer" class="btn btn-success"><i class="fas fa-plus nav-icon"></i> Tambah Anggota</a>
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-bordered table-striped dataTable ">
                            <thead>
                            <tr>
                              <th>#</th>
                              <th>Action</th>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>No. WhatsApp</th>
                              <th>Alamat</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                            <tr>
                              <th>#</th>
                              <th>Action</th>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>No. WhatsApp</th>
                              <th>Alamat</th>
                            </tr>
                            </tfoot>
                          </table>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
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
      <script>
       $(function () {

/*------------------------------------------
 --------------------------------------------
 Pass Header Token
 --------------------------------------------
 --------------------------------------------*/
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        /*------------------------------------------
        --------------------------------------------
        Render DataTable
        --------------------------------------------
        --------------------------------------------*/
        var table = $('.dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('anggota.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
                {data: 'nama', name: 'nama'},
                {data: 'email', name: 'email'},
                {data: 'wa', name: 'wa'},
                {data: 'alamat', name: 'alamat'},

            ]
        });

        /*------------------------------------------
        --------------------------------------------
        Click to Button
        --------------------------------------------
        --------------------------------------------*/
        $('#createData').click(function () {
            $('#saveBtn').val("create-Data");
            $('#id').val('');
            $('#DataForm').trigger("reset");
            $('#modelHeading').html("Tambah Data Baru");
            $('#ajaxModel').modal('show');
        });

        /*------------------------------------------
        --------------------------------------------
        Click to Edit Button
        --------------------------------------------
        --------------------------------------------*/
        $('body').on('click', '.editData', function () {
        var id = $(this).data('id');
        $.get("{{ route('anggota.index') }}" +'/' + id +'/edit', function (data) {
            $('#modelHeading').html("Edit Data");
            $('#saveBtn').val("edit Data");
            $('#saveBtn').css('display', 'block');
            $('#ajaxModel').modal('show');
            $('#id').val(data.id);
            $('#nama').val(data.nama).prop('readonly', false);
            $('#email').val(data.email).prop('readonly', false);
            $('#wa').val(data.wa).prop('readonly', false);
            $('#alamat').val(data.alamat).prop('readonly', false);
        })
        });
        /*------------------------------------------
        --------------------------------------------
        show Satuan Code
        --------------------------------------------
        --------------------------------------------*/

        $('body').on('click', '.showData', function () {
        var id = $(this).data('id');
        $.get("{{ route('anggota.index') }}" +'/' + id, function (data) {
        $('#modelHeading').html("Detail Data");
        $('#saveBtn').css('display', 'none');
        $('#ajaxModel').modal('show');
        $('#id').val(data.id);
        $('#nama').val(data.nama).prop('readonly', true);
        $('#email').val(data.email).prop('readonly', true);
        $('#wa').val(data.wa).prop('readonly', true);
        $('#alamat').val(data.alamat).prop('readonly', true);
        })
        });

        /*------------------------------------------
        --------------------------------------------
        Create Data Code
        --------------------------------------------
        --------------------------------------------*/
        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Simpan');
            var id = $(this).data("id");
            Swal.fire({
            title: 'Input Data',
            text: "Apakah kamu sudah yakin!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Simpan!',
            cancelButtonText: 'Batal!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
            data: $('#DataForm').serialize(),
            url: "{{ route('anggota.store') }}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                swal("Done!", "Data Berhasil Disimpan!", "success");
                $('#DataForm').trigger("reset");
                $('#ajaxModel').modal('hide');
                table.draw();

            },
            error: function (data) {
                console.log('Error:', data);
                $('#saveBtn').html('Save Changes');
            }
        });
            }
            });

        });

        /*------------------------------------------
        --------------------------------------------
        Delete Data Code
        --------------------------------------------
        --------------------------------------------*/
        $('body').on('click', '.deleteData', function () {
            var id = $(this).data("id");
            Swal.fire({
            title: 'Hapus Data',
            text: "Apakah kamu sudah yakin!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Simpan!',
            cancelButtonText: 'Batal!'
            }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                type: "DELETE",
                url: "{{ route('anggota.store') }}"+'/'+id,
                success: function (data) {
                    swal("Done!", "Data Behasil Dihapus!", "success");
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
            }
            });

        });

});
      </script>
    @endsection
