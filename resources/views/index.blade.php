@extends('layout.dashboard')
    @section('konten')
    <div class="content-wrapper p-2">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-gray-dark">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Dashboard
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <i class="fa fa-upload fa-4x" aria-hidden="true"></i>
                                                <span class="float-right"  style="font-size: 3em;">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-warning">
                                            <div class="card-body">
                                                <i class="fa fa-download fa-4x text-white" aria-hidden="true"></i>
                                                <span class="float-right text-white" style="font-size: 3em;">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-danger">
                                            <div class="card-body">
                                                <i class="fa fa-calendar-alt fa-4x" aria-hidden="true"></i>
                                                <span class="float-right"  style="font-size: 3em;">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <span class="float-right"  style="font-size: 3em;">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <span class="float-right"  style="font-size: 3em;">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <span class="float-right"  style="font-size: 3em;">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <span class="float-right"  style="font-size: 3em;">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <span class="float-right"  style="font-size: 3em;">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <span class="float-right"  style="font-size: 3em;">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <span class="float-right"  style="font-size: 3em;">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="card">
                                            <div class="card-header bg-gray-dark">
                                                <h3 class="card-title">Grafik</h3>
                                            </div>
                                            <div class="card-body">
                                                <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-header bg-gray-dark">
                                                <h3 class="card-title">Table Data</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-sm">
                                                        <thead class=" bg-gray-dark">
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Kategori</th>
                                                                <th scope="col">Jumlah</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-bordered">
                                                            <tr class="">
                                                                <td scope="row">1</td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr class="">
                                                                <td scope="row">2</td>
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
                        </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        const myChart = new Chart("myChart", {
            type: "line",
            data: {},
            options: {}
        });
    </script>
@endsection
