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
use Illuminate\Http\Request;
use App\Post;
Route::get('/', function () {
    $categ = App\Category::all();
    return view('welcome',
    ["results"=>$categ]);
});
Route::get('/test/{name}', function ($name) {
    App\Category::create([
        "name"=>$name
    ]);
});
Route::get('/getAll',function(Request $req){
    header('Access-Control-Allow-Origin:*');
    $post = App\Item::all();
    return $post;
});
Route::get('/lost',function(Request $req){
    header('Access-Control-Allow-Origin:*');
    $lost = App\Item::where('status',0)->get();
    return $lost;
});
Route::get('/found',function(Request $req){
    header('Access-Control-Allow-Origin:*');
    $found = App\Item::where('status',1)->get();
    return $found;
});
Route::get('/search',function(Request $req){
    header('Access-Control-Allow-Origin:*');
    $search = App\Item::where('title', 'like', '%' . $req->searching . '%')
    ->orWhere('description', 'like', '%' . $req->searching . '%')->get();
    return $search;
});
Route::get('/advertisement',function(Request $req){
    header('Access-Control-Allow-Origin:*');
    
    return $req->creating2;
});
