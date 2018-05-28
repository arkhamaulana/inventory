<?php

use Illuminate\Http\Request;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/coba', 'ADMINController@coba');
Route::get('/admin', 'ADMINController@index')->middleware('admin');
Route::get('/tables', 'ADMINController@tables');

Route::get('/peminjaman', 'PEMINJAMANController@index');

Route::get('/productajaxCRUD', 'PRODUCTSController@index');
// Route::get('productajaxCRUD', function () {
//     $products = App\Product::all();
//     return view('ajax.index')->with('products',$products);
// });
Route::get('productajaxCRUD/{id?}',function($id){
    $product = App\Product::find($id);
    return response()->json($product);
});
Route::post('productajaxCRUD',function(Request $request){   
    $product = App\Product::create($request->input());
    return response()->json($product);
});
Route::put('productajaxCRUD/{id?}',function(Request $request,$id){
    $product = App\Product::find($id);
    $product->code = $request->code;
    $product->name = $request->name;
    $product->details = $request->details;
    $product->save();
    return response()->json($product);
});
Route::delete('productajaxCRUD/{id?}',function($id){
    $product = App\Product::destroy($id);
    return response()->json($product);
});

Route::get('/engineer', 'ENGINEERController@index');