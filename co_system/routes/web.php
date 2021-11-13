<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','DefController@index');
Route::get('maps','DefController@maps');
Route::get('tentang','DefController@tentang');
Route::get('kontak','DefController@kontak');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('download', 'HomeController@download');

//data produksi sawit
Route::get('overview-produksi-sawit','ProduksiSawitController@overview');
Route::get('input-data-produksi','ProduksiSawitController@input_data_produksi');

//data relevan lain
Route::get('data-relevan-lain','DataLainController@index');

//rekapitulasi data produksi
Route::get('overview-data-produksi','RekapitulasiController@overview');
Route::get('input-rekapitulasi-data','RekapitulasiController@input_rekapitulasi_data');

//input data tabular
Route::get('data-kecamatan','TabularController@data_kecamatan');
Route::get('data-jabatan','TabularController@data_jabatan');
Route::get('data-user','TabularController@data_user');
Route::get('data-sumber-dana','TabularController@data_sumber_dana');
Route::get('data-umum-infrastruktur','TabularController@data_umum_infrastruktur');
Route::get('data-tingkat-akses-jalan','TabularController@data_tingkat_akses_jalan');
Route::get('data-kondisi','TabularController@data_kondisi');
Route::get('data-kondisi-permukaan-jalan','TabularController@data_kondisi_permukaan_jalan');
Route::get('data-wewenang-penanganan-jalan','TabularController@data_wewenang_penanganan_jalan');
Route::get('data-jenis-jembatan','TabularController@data_jenis_jembatan');
Route::get('data-klasifikasi-fungsi-jalan','TabularController@data_klasifikasi_fungsi_jalan');
Route::get('data-beban-jalan','TabularController@data_beban_jalan');
Route::get('data-administrasi-jalan','TabularController@data_administrasi_jalan');
Route::get('data-klasifikasi-fungsi-jembatan','TabularController@data_klasifikasi_fungsi_jembatan');
Route::get('data-jenis-infrastruktur','TabularController@data_jenis_infrastruktur');

//input data infrastruktur
Route::get('pemetaan-infrastruktur','InfrastrukturController@pemetaan_infrastruktur');
Route::get('data-infrastruktur-jalan','InfrastrukturController@data_infrastruktur_jalan');
Route::get('data-infrastruktur-jembatan','InfrastrukturController@data_infrastruktur_jembatan');
Route::get('data-infrastruktur-bangunan','InfrastrukturController@data_infrastruktur_bangunan');
Route::get('data-infrastruktur-air','InfrastrukturController@data_infrastruktur_air');
Route::get('laporan-infrastruktur-jalan','InfrastrukturController@laporan_infrastruktur_jalan');
Route::get('laporan-infrastruktur-jembatan','InfrastrukturController@laporan_infrastruktur_jembatan');
Route::get('laporan-infrastruktur-bangunan','InfrastrukturController@laporan_infrastruktur_bangunan');
Route::get('laporan-infrastruktur-air','InfrastrukturController@laporan_infrastruktur_air');
Route::get('laporan-infrastruktur-perumahan-pemukiman','InfrastrukturController@laporan_infrastruktur_perumahan_pemukiman');
Route::get('download-file-infrastruktur','InfrastrukturController@download_file_infrastruktur');
Route::get('laporan-history-kegiatan','InfrastrukturController@laporan_history_kegiatan');
Route::get('download-history','InfrastrukturController@download_history');

//monografi kebun
Route::get('monografi-kebun','MonografiKebunController@index');

//peta vektor
Route::get('peta-vektor','PetaVektorController@index');

//peta persebaran lahan
Route::get('overview-peta-lahan','PetaPersebaranLahanController@overview_peta_lahan');
Route::get('pemetaan-batas-blok-kebun','PetaPersebaranLahanController@pemetaan_batas_blok_kebun');
Route::get('pemetaan-pokok-sawit','PetaPersebaranLahanController@pemetaan_pokok_sawit');
Route::get('pemetaan-infrastruktur-kebun','PetaPersebaranLahanController@pemetaan_infrastruktur_kebun');

//peta dasar
Route::get('peta-dasar','PetaDasarController@index');
