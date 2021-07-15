<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('welcome');
})->name('/');

//tạo 1 route trong đó dùng phương thức get để lấy dữ liệu
Route::get('admin/users/index', function(){
    //lấy ra tòan bộ dữ liệu trong bảng user
    $user = DB::table('users')->get();
    //dừuong đãn sang trang index
    return view('admin/users/index', [
        //truyền dữ liệu sang k dùng compact
        //tên => dữ liệu
        'data' => $user,
    ]);
})->name('admin.users.index');

//                                                      -> đặt name cho route
Route::view('admin/users/create', 'admin/users/create')->name('admin.users.create');

//demo
// Route::view('admin/users/index', 'admin/users/index')->name('admin.users.index');



// 2 đường dẫn user giống nhau vẫn được vì khác phương thức
Route::post('admin/users/store', function(){
    //lưu dữ liệu vào DB
    // dd($_REQUEST);
    // khi add xong thì điểu hướng về trang index
    return redirect()->route('admin.users.index');
})->name('admin.users.store');
// trả ra view tương ứng với url


Route::get('admin/users/edit/{id}', function($id){
    $data = DB::table('users')->find($id);
    return view('admin/users/edit',[
        'data' => $data,
    ]);
//return view
})->name('admin.users.edit');


Route::post('admin/users/update/{id}', function(){
//thực thi gửi lên để update
  return redirect()->route('admin.users.index');
})->name('admin.users.update');


Route::post('admin/users/delete/{id}', function(){
    //return view
    dd('xoa');
    })->name('admin.users.delete');
/*
sự kahsc nhau giữa match và any
match ;\: mapping url với callback tương ướng, mapping theo nhiều phương thú http đã có
any dùng được tất cả các phương thức
*/

