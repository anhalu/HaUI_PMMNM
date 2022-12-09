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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
]);

Route::get('danh-muc-san-pham/{type}',[
	'as'=>'danhmucsp',
	'uses'=>'PageController@getDanhmucSp'
]);

Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitiet'
]);

Route::get('san-pham-moi',[
	'as'=>'sp_new',
	'uses'=>'PageController@getSpNew'
]);

Route::get('san-pham-giam-gia',[
	'as'=>'sp_sale',
	'uses'=>'PageController@getSpSale'
]);

Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=>'PageController@getLienHe'
]);

Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=>'PageController@getGioiThieu'
]);

Route::get('tin-tuc',[
	'as'=>'tintuc',
	'uses'=>'PageController@getNews'
]);

Route::get('chi-tiet-tin/{id}',[
	'as'=>'chitiettin',
	'uses'=>'PageController@getChitietNews'
]);

Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'PageController@getDelItemCart'
]);


Route::get('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@getCheckout'
]);


Route::post('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@postCheckout'
]);

Route::get('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@getLogin'
]);

Route::post('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@postLogin'
]);

Route::get('dang-ky',[
	'as'=>'sigin',
	'uses'=>'PageController@getSigin'
]);

Route::post('dang-ky',[
	'as'=>'sigin',
	'uses'=>'PageController@postSigin'
]);

Route::get('dang-xuat',[
	'as'=>'logout',
	'uses'=>'PageController@postLogout'
]);

Route::get('search',[
	'as'=>'search',
	'uses'=>'PageController@getSearch'
]);
Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
	Route::group(['prefix'=>'layout'],function(){
		Route::get('trangchu',[
		'as'=>'trangchu',
		'uses'=>'AdminController@getIndex']);

		Route::get('profile',[
		'as'=>'thong-tin-ca-nhan',
		'uses'=>'AdminController@getProfile']);
	});
		Route::group(['prefix'=>'danhmuc'],function(){
		//admin/danhmuc/danhsach
		Route::get('danhsach','DanhMucController@getDanhSach');

		Route::get('edit/{id}','DanhMucController@getEdit');
		Route::post('edit/{id}','DanhMucController@postEdit');

		Route::get('add','DanhMucController@getAdd');
		Route::post('add','DanhMucController@postAdd');

		Route::get('delete/{id}','DanhMucController@getDelete');
	});

		Route::group(['prefix'=>'loaisp'],function(){
		//admin/loaisp/danhsach
		Route::get('danhsach','LoaiSpController@getDanhSach');

		Route::get('edit/{id}','LoaiSpController@getEdit');
		Route::post('edit/{id}','LoaiSpController@postEdit');

		Route::get('add','LoaiSpController@getAdd');
		Route::post('add','LoaiSpController@postAdd');

		Route::get('delete/{id}','LoaiSpController@getDelete');
	});

		Route::group(['prefix'=>'sanpham'],function(){
		//admin/sanpham/danhsach
		Route::get('danhsach','ProductController@getDanhSach');

		Route::get('edit/{id}','ProductController@getEdit');
		Route::post('edit/{id}','ProductController@postEdit');

		Route::get('add','ProductController@getAdd');
		Route::post('add','ProductController@postAdd');
		// Route::get('delete/{id}','ProductController@getDelete');
		Route::get('huy','ProductController@getHuy');
		Route::post('huy/{id}','ProductController@postHuy');
	});

		Route::group(['prefix'=>'comment'],function(){
		//admin/sanpham/danhsach
		Route::get('delete/{id}/{id_product}','CommentController@getDelete');
		Route::post('chi-tiet-san-pham/{id}','CommentController@postAdd');
	});

		Route::group(['prefix'=>'slide'],function(){
		//admin/slide/danhsach
		Route::get('danhsach','SlideController@getDanhSach');

		Route::get('edit/{id}','SlideController@getEdit');
		Route::post('edit/{id}','SlideController@postEdit');

		Route::get('add','SlideController@getAdd');
		Route::post('add','SlideController@postAdd');

		Route::get('delete/{id}','SlideController@getDelete');
	});

		Route::group(['prefix'=>'nhacungcap'],function(){
		//admin/nhacungcap/danhsach
		Route::get('danhsach','NhaCungCapController@getDanhSach');

		Route::get('edit/{id}','NhaCungCapController@getEdit');
		Route::post('edit/{id}','NhaCungCapController@postEdit');

		Route::get('add','NhaCungCapController@getAdd');
		Route::post('add','NhaCungCapController@postAdd');

		Route::get('delete/{id}','NhaCungCapController@getDelete');
	});

			Route::group(['prefix'=>'khachhang'],function(){
		//admin/khachhang/danhsach
		Route::get('danhsach','CustomerController@getDanhSach');

		Route::get('edit/{id}','CustomerController@getEdit');
		Route::post('edit/{id}','CustomerController@postEdit');

		Route::get('add','CustomerController@getAdd');
		Route::post('add','CustomerController@postAdd');

		Route::get('delete/{id}','CustomerController@getDelete');
	});


		Route::group(['prefix'=>'tintuc'],function(){
		//admin/tintuc/danhsach
		Route::get('danhsach','TintucController@getDanhSach');

		Route::get('edit/{id}','TintucController@getEdit');
		Route::post('edit/{id}','TintucController@postEdit');

		Route::get('add','TintucController@getAdd');
		Route::post('add','TintucController@postAdd');

		Route::get('delete/{id}','TintucController@getDelete');
	});

		Route::group(['prefix'=>'user'],function(){
		//admin/user/danhsach
		Route::get('danhsach','UserController@getDanhSach');

		Route::get('edit/{id}','UserController@getEdit');
		Route::post('edit/{id}','UserController@postEdit');

		Route::get('add','UserController@getAdd');
		Route::post('add','UserController@postAdd');
		
		Route::get('delete/{id}','UserController@getDelete');
	});

		Route::group(['prefix'=>'nhanvien'],function(){
		//admin/nhanvien/danhsach
		Route::get('danhsach','EmployeesController@getDanhSach');

		Route::get('edit/{id}','EmployeesController@getEdit');
		Route::post('edit/{id}','EmployeesController@postEdit');

		Route::get('add','EmployeesController@getAdd');
		Route::post('add','EmployeesController@postAdd');
		
		Route::get('delete/{id}','EmployeesController@getDelete');
	});

		Route::group(['prefix'=>'bill'],function(){
		//admin/bill/
		Route::get('donhang','BillController@getDanhSach');
		Route::get('chitietdon/{id}','BillController@getChitiet');
		Route::get('ban','BillController@getBan');
		Route::post('ban/{id}','BillController@postBan');

		Route::get('huy','BillController@getHuy');
		Route::post('huy/{id}','BillController@postHuy');
	});

		Route::group(['prefix'=>'bill-import'],function(){
		//admin/bill-import/
		Route::get('danhsach','ImportBillController@getDanhSach');
		Route::get('chitietdon/{id}','ImportBillController@getChitiet');
		Route::get('ban','ImportBillController@getBan');
		Route::post('ban/{id}','ImportBillController@postBan');

		Route::get('huy','ImportBillController@getHuy');
		Route::post('huy/{id}','ImportBillController@postHuy');
	});

	Route::group(['prefix'=>'ajax'],function(){
			Route::get('loaisp/{id_type}','AjaxController@getLoaiSp');
		});

});

