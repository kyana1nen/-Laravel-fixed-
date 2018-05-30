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
    $post = App\Item::where('solution',0)->orderBy("created_at","desc")->get();
    return $post;
});
Route::get('/lost',function(Request $req){
    header('Access-Control-Allow-Origin:*');
    $lost = App\Item::where('status',0)->where('solution',0)->get();
    return $lost;
});
Route::get('/found',function(Request $req){
    header('Access-Control-Allow-Origin:*');
    $found = App\Item::where('status',1)->where('solution',0)->get();
    return $found;
});
Route::get('/search',function(Request $req){
    header('Access-Control-Allow-Origin:*');
    $search = App\Item::where('title', 'like', '%' . $req->searching . '%')
    ->orWhere('descriptions', 'like', '%' . $req->searching . '%')->get();
    return $search;
});
Route::get('/advertisement',function(Request $req){
    header('Access-Control-Allow-Origin:*');
    $id = App\Item::insertGetId([
        "title"=>$req->title,
		"descriptions"=>$req->description,
		"contact"=>$req->contact,
		"status"=>$req->status,
		"solution"=>0
    ]);
	return $id;
});
Route::get('/myAdv',function(Request $req){
    header('Access-Control-Allow-Origin:*');
	$myAdv = App\Item::where('id',$req->itemId)->get();
	return $myAdv;
});
Route::get('/removeAdv',function(Request $req){
	header('Access-Control-Allow-Origin:*');
	App\Item::find($req->itemId)->update(['solution' => 1]);
});