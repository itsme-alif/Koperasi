<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', 'App\Http\Controllers\MasterController@index');

Route::resource('anggota', App\Http\Controllers\RegistUserController::class);
Route::resource('add_anggota', App\Http\Controllers\AddAnggotaController::class);
Route::resource('news', App\Http\Controllers\NewsController::class);
Route::resource('news_admin', App\Http\Controllers\NewsAdminController::class);
Route::resource('user', App\Http\Controllers\UserController::class);
Route::resource('user_group', App\Http\Controllers\UserGroupController::class);
Route::resource('user_cashier', App\Http\Controllers\UserCashierController::class);
Route::resource('account', App\Http\Controllers\AccountController::class);
Route::resource('account_edit', App\Http\Controllers\AccountEditController::class);
Route::resource('account_balance', App\Http\Controllers\AccountBalanceController::class);
Route::resource('cabang', App\Http\Controllers\CabangController::class);
Route::resource('add_cabang', App\Http\Controllers\AddCabangController::class);
Route::resource('change_password', App\Http\Controllers\ChangePasswordController::class);
Route::resource('log', App\Http\Controllers\LogController::class);
Route::resource('activate_wa', App\Http\Controllers\ActivateWaController::class);
Route::resource('regist_kreditH', App\Http\Controllers\RegistKreditHController::class);
Route::resource('regist_kredit', App\Http\Controllers\RegistKreditController::class);
Route::resource('change_regist_edit', App\Http\Controllers\ChangeRegistEditController::class);
Route::resource('change_regist_status', App\Http\Controllers\ChangeRegistStatusController::class);
Route::resource('saving_regist', App\Http\Controllers\SavingRegistStatusController::class);
Route::resource('saving_regist', App\Http\Controllers\SavingRegistStatusController::class);
Route::resource('print_saving_cover', App\Http\Controllers\PrintSavingCoverController::class);
Route::resource('change_saving_status', App\Http\Controllers\ChangeSavingStatusController::class);
Route::resource('regist_simpanan', App\Http\Controllers\RegistSimpananController::class);
Route::resource('change_simpanan_status', App\Http\Controllers\ChangeSimpananStatusController::class);
Route::resource('accept_kredit', App\Http\Controllers\AcceptKreditController::class);
Route::resource('pinjaman_policy', App\Http\Controllers\PinjamanPolicyController::class);
Route::resource('pinjaman_harian_policy', App\Http\Controllers\PinjamanPolicyHarianController::class);
Route::resource('accept_kredit_harian', App\Http\Controllers\AcceptKreditHarianController::class);
Route::resource('setoran', App\Http\Controllers\SetoranController::class);
Route::resource('laporan_harian', App\Http\Controllers\LaporanHarianController::class);
Route::resource('laporan_keuangan', App\Http\Controllers\LaporanKeuanganController::class);
Route::resource('laporan_daperma', App\Http\Controllers\LaporanDapermaController::class);
Route::resource('laporan_anggota', App\Http\Controllers\LaporanAnggotaController::class);
Route::resource('laporan_tabungan', App\Http\Controllers\LaporanTabunganController::class);
Route::resource('laporan_berjangka', App\Http\Controllers\LaporanSimpananBerjangkaController::class);
Route::resource('laporan_kredit', App\Http\Controllers\LaporanKreditController::class);
Route::resource('segmentasi_anggota', App\Http\Controllers\SegmentasiAnggotaController::class);
Route::resource('add_anggotamigrasi', App\Http\Controllers\AddAnggotaMigrasiController::class);
Route::resource('add_tabungan', App\Http\Controllers\AddTabunganController::class);
Route::resource('add_deposito', App\Http\Controllers\AddDepositoController::class);
Route::resource('add_kredit', App\Http\Controllers\AddKreditController::class);
Route::resource('trx_simpanan', App\Http\Controllers\TrxSimpananController::class);
Route::resource('setoran_regist_anggota', App\Http\Controllers\SetoranRegistAnggotaController::class);
Route::resource('trx_dividen', App\Http\Controllers\TrxDividenController::class);
Route::resource('resign_member', App\Http\Controllers\ResignMemberController::class);
Route::resource('trx_tabungan', App\Http\Controllers\TrxTabunganController::class);
Route::resource('setoran_regist_tabungan', App\Http\Controllers\SetoranRegistTabunganController::class);
Route::resource('trx_simpanan_berjangka', App\Http\Controllers\TrxSimpananBerjangkaController::class);
Route::resource('setoran_regist_berjangka', App\Http\Controllers\SetoranRegistBerjangkaController::class);
Route::resource('perpanjang_otomatis', App\Http\Controllers\PerpanjangOtomatisController::class);
Route::resource('trx_kredit', App\Http\Controllers\TrxKreditController::class);
Route::resource('trx_cair_kredit', App\Http\Controllers\TrxCairKreditController::class);
Route::resource('trx_kredit_h', App\Http\Controllers\TrxKreditHarianController::class);
Route::resource('trx_kredit_titipan', App\Http\Controllers\TrxKreditTitipanController::class);
Route::resource('trx_kredit_gabungan', App\Http\Controllers\TrxKreditGabunganController::class);
Route::resource('trx_pencairan_kredit', App\Http\Controllers\TrxPencairanKreditController::class);
Route::resource('bunga_tabungan', App\Http\Controllers\BungaTabunganController::class);
Route::resource('set_priode', App\Http\Controllers\SetPriodeController::class);
Route::resource('proses_bunga', App\Http\Controllers\ProsesBungaController::class);
Route::resource('set_priode_ssm', App\Http\Controllers\SetSimaloController::class);
Route::resource('set_priode_simpanan', App\Http\Controllers\SetPriodeSimpananController::class);
Route::resource('jurnal_inkas', App\Http\Controllers\JurnalInKasController::class);
Route::resource('jurnal_outkas', App\Http\Controllers\JurnalOutKasController::class);
Route::resource('jurnal_umum', App\Http\Controllers\JurnalUmumController::class);
Route::resource('jurnal_koreksi', App\Http\Controllers\JurnalKoreksiController::class);
Route::resource('koreksi_trx_tabungan', App\Http\Controllers\KoreksiTrxTabunganController::class);
Route::resource('koreksi_trx_kredit', App\Http\Controllers\KoreksiTrxDepositoController::class);
Route::resource('koreksi_trx_deposito', App\Http\Controllers\KoreksiTrxKreditController::class);
Route::resource('parameter_user', App\Http\Controllers\ParameterUserController::class);
Route::resource('parameter_koperasi', App\Http\Controllers\ParameterKoperasiController::class);
Route::resource('parameter_anggota', App\Http\Controllers\ParameterAnggotaController::class);
Route::resource('parameter_tabungan', App\Http\Controllers\ParameterTabunganController::class);
Route::resource('parameter_deposito', App\Http\Controllers\ParameterDepositoController::class);
Route::resource('parameter_kredit', App\Http\Controllers\ParameterKreditController::class);
Route::resource('parameter_bukubesar', App\Http\Controllers\ParameterBukuBesarController::class);
Route::resource('parameter_transaksi', App\Http\Controllers\ParameterTransaksiController::class);
Route::resource('parameter_status', App\Http\Controllers\ParameterStatusController::class);
Route::resource('parameter_nomor', App\Http\Controllers\ParameterNomorController::class);
Route::resource('koreksi_simpanan', App\Http\Controllers\KoreksiDataController::class);
Route::resource('koreksi_tabungan', App\Http\Controllers\KoreksiTabunganController::class);
Route::resource('koreksi_kredit', App\Http\Controllers\KoreksiKreditController::class);
Route::resource('koreksi_bukubesar', App\Http\Controllers\KoreksiBukuBesarController::class);
