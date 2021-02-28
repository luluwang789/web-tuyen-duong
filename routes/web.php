<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//dashboard
Route::get('/dashboard', [
    'as' => 'home',
    'uses' => 'App\Http\Controllers\PageController@GetDashboard'
]);
// đăng nhập
Route::post('/manager-dashboard', [
    'as' => 'manager-home',
    'uses' => 'App\Http\Controllers\PageController@PostDashboard'
]);
// đăng xuất
Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'App\Http\Controllers\PageController@LogOut'
]);
//đăng nhập
Route::get('/login', [
    'as' => 'login',
    'uses' => 'App\Http\Controllers\PageController@GetLogin'
]);
//Cấp thành đoàn
Route::get('/hoso1', [
    'as' => 'hoso1',
    'uses' => 'App\Http\Controllers\PageController@File1'
]);

Route::get('/hoso2', [
    'as' => 'hoso2',
    'uses' => 'App\Http\Controllers\PageController@File2'
]);
//Cấp trung ương
Route::get('/hoso3', [
    'as' => 'hoso3',
    'uses' => 'App\Http\Controllers\PageController@File3'
]);

Route::get('/hoso4', [
    'as' => 'hoso4',
    'uses' => 'App\Http\Controllers\PageController@File4'
]);

Route::get('/thongtin', [
    'as' => 'info',
    'uses' => 'App\Http\Controllers\PageController@Info'
]);

Route::get('/nguoidung', [
    'as' => 'user',
    'uses' => 'App\Http\Controllers\PageController@User'
]);

//năm học
Route::get('/namhoc', ['as' => 'year','uses' => 'App\Http\Controllers\NamHocController@Year']);
Route::get('/tatca_namhoc', ['as' => 'all_year','uses' => 'App\Http\Controllers\NamHocController@AllYear']);
Route::get('/unactive-year/{id_year}', ['as' => 'unactive-year','uses' => 'App\Http\Controllers\NamHocController@UnActiveYear']);
Route::get('/active-year/{id_year}', ['as' => 'active-year','uses' => 'App\Http\Controllers\NamHocController@ActiveYear']);
Route::get('/sua-nam-hoc/{id_year}','App\Http\Controllers\NamHocController@EditYear');
Route::post('/update-year/{id_year}',['as'=>'update-year','uses'=>'App\Http\Controllers\NamHocController@UpdateYear']);
Route::get('/delete-year/{id_year}', ['as' => 'delete-year','uses' => 'App\Http\Controllers\NamHocController@DeleteYear']);
Route::post('/save-year', ['as' => 'save-year','uses' => 'App\Http\Controllers\NamHocController@SaveYear']);


//danh hiệu
Route::get('/danhhieu', ['as' => 'title','uses' => 'App\Http\Controllers\DanhHieuController@Title']);
Route::post('/save-title', ['as' => 'save-title','uses' => 'App\Http\Controllers\DanhHieuController@SaveTitle']);
Route::get('/tatca_danhhieu', ['as' => 'all_title','uses' => 'App\Http\Controllers\DanhHieuController@AllTitle']);
Route::get('/sua-danh-hieu/{id_title}',['as' => 'edit-danhhieu','uses' => 'App\Http\Controllers\DanhHieuController@EditTitle']);
Route::post('/update-danhhieu/{id_title}',['as'=>'update-title', 'uses'=>'App\Http\Controllers\DanhHieuController@UpdateTitle']);
Route::get('/active-danhhieu/{id_title}',['as'=>'active-title', 'uses'=>'App\Http\Controllers\DanhHieuController@ActiveTitle']);
Route::get('/unactive-danhhieu/{id_title}',['as'=>'unactive-title', 'uses'=>'App\Http\Controllers\DanhHieuController@UnActiveTitle']);

//hình thức
Route::get('/hinhthuc', ['as' => 'form','uses' => 'App\Http\Controllers\HinhThucController@Form']);
Route::post('/save-form', ['as' => 'save-form','uses' => 'App\Http\Controllers\HinhThucController@SaveForm']);
Route::get('/tatca_hinhthuc', ['as' => 'all_form','uses' => 'App\Http\Controllers\HinhThucController@AllForm']);

//thông tin sinh viên
Route::get('/tt_sinhvien', ['as' => 'info_student','uses' => 'App\Http\Controllers\TTSinhVienController@InfoStudent']);
Route::post('/save-info-student', ['as' => 'save-info-student','uses' => 'App\Http\Controllers\TTSinhVienController@SaveInfoStudent']);
Route::get('/tatca_tt_sinhvien', ['as' => 'all_info_student','uses' => 'App\Http\Controllers\TTSinhVienController@AllInfoStudent']);

//đề cử
Route::get('/decu', ['as' => 'nomination','uses' => 'App\Http\Controllers\DeCuController@Nomination']);
Route::post('/save-nomination', ['as' => 'save-nomination','uses' => 'App\Http\Controllers\DeCuController@SaveNomination']);
Route::get('/tatca_decu', ['as' => 'all_nomination','uses' => 'App\Http\Controllers\DeCuController@AllNomination']);

//Đơn vị
Route::get('/donvi', ['as' => 'donvi','uses' => 'App\Http\Controllers\DonViController@Unit']);
Route::post('/save-unit', ['as' => 'save-unit','uses' => 'App\Http\Controllers\DonViController@SaveUnit']);
Route::get('/tatca_donvi', ['as' => 'all_donvi','uses' => 'App\Http\Controllers\DonViController@AllUnit']);

//sửa

