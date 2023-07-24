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
                                                <div class="row">
                                                    <div class="col">
                                                        <i class="fa fa-user-plus fa-4x" aria-hidden="true"></i>
                                                    </div>
                                                   <div class="col text-right">
                                                    <div style="font-size: 2em;">143</div>
                                                    <div  style="font-size: 1em;">Anggota Baru</div>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-warning">
                                            <div class="card-body">
                                                <div class="row  text-white">
                                                    <div class="col">
                                                        <i class="fa fa-wallet fa-4x" aria-hidden="true"></i>
                                                    </div>
                                                   <div class="col text-right">
                                                    <div style="font-size: 2em;">424.233.000</div>
                                                    <div  style="font-size: 1em;">Simpanan Wajib</div>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-danger">
                                            <div class="card-body">
                                                <div class="row  text-white">
                                                    <div class="col">
                                                        <i class="fa fa-hand-holding-usd fa-4x" aria-hidden="true"></i>
                                                    </div>
                                                   <div class="col text-right">
                                                    <div style="font-size: 2em;">46.233.000</div>
                                                    <div  style="font-size: 1em;">Simpanan Wajib</div>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <div class="row  text-white">
                                                    <div class="col">
                                                        <i class="fa fa-upload fa-3x" aria-hidden="true"></i>
                                                    </div>
                                                   <div class="col text-right">
                                                    <div style="font-size: 1.5em;">4.273.000</div>
                                                    <div  style="font-size: 1.1em;">Pinjaman Cair</div>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <div class="row  text-white">
                                                    <div class="col">
                                                        <i class="fa fa-cash-register fa-3x" aria-hidden="true"></i>
                                                    </div>
                                                   <div class="col text-right">
                                                    <div style="font-size: 1.5em;">6.873.000</div>
                                                    <div  style="font-size: 1.1em;">Pembayaran Pinjaman</div>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <div class="row  text-white">
                                                    <div class="col">
                                                        <i class="fa fa-file-signature fa-3x" aria-hidden="true"></i>
                                                    </div>
                                                   <div class="col text-right">
                                                    <div style="font-size: 1.5em;">645</div>
                                                    <div  style="font-size: 1.1em;">Pendafaran Tabungan</div>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <div class="row  text-white">
                                                    <div class="col">
                                                        <i class="fa fa-calculator fa-3x" aria-hidden="true"></i>
                                                    </div>
                                                   <div class="col text-right">
                                                    <div style="font-size: 1.5em;">6.873.000</div>
                                                    <div  style="font-size: 0.7em;">Nominal Pendfataran Tabungan</div>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <div class="row  text-white">
                                                    <div class="col">
                                                        <i class="fa fa-hand-holding-usd fa-4x" aria-hidden="true"></i>
                                                    </div>
                                                   <div class="col text-right">
                                                    <div style="font-size: 2em;">424.233.000</div>
                                                    <div  style="font-size: 1em;">Simpanan Wajib</div>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <div class="row  text-white">
                                                    <div class="col">
                                                        <i class="fa fa-hand-holding-usd fa-4x" aria-hidden="true"></i>
                                                    </div>
                                                   <div class="col text-right">
                                                    <div style="font-size: 2em;">424.233.000</div>
                                                    <div  style="font-size: 1em;">Simpanan Wajib</div>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card  bg-primary">
                                            <div class="card-body">
                                                <div class="row  text-white">
                                                    <div class="col">
                                                        <i class="fa fa-hand-holding-usd fa-4x" aria-hidden="true"></i>
                                                    </div>
                                                   <div class="col text-right">
                                                    <div style="font-size: 2em;">424.233.000</div>
                                                    <div  style="font-size: 1em;">Simpanan Wajib</div>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-8">
                                        <div class="card">
                                            <div class="card-header bg-gray-dark">
                                                <h3 class="card-title">Grafik</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <canvas id="myChart" style="width:100%;max-width:700px; height:420px;"></canvas>
                                                    </div>
                                                    <div class="col">
                                                        <canvas id="myCharti" style="width:100%;max-width:700px; height:420px;"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-header bg-gray-dark">
                                                <h3 class="card-title">Transaksi Pembayaran Per Unit</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-sm">
                                                        <thead class=" bg-gray-dark">
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Kategori</th>
                                                                <th scope="col">Cabang/unit</th>
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
            type: 'line',
            data: {
				labels: ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"],
				datasets: [{
					label: 'Grafik Pembayaran Pinjaman',
					data: [12, 19, 3, 23, 2, 3,12, 32, 3, 23, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
        });
        const myCharti = new Chart("myCharti", {
            type: "line",
            data: {
				labels: ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"],
				datasets: [{
					label: 'Grafik Pembayaran Simpanan Wajib',
					data: [12, 32, 3, 23, 2, 3,12, 32, 3, 23, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
        });
    </script>
@endsection
