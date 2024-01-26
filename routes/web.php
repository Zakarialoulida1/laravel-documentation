<?php
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\informationcontroller;
use App\Http\Controllers\profilcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Descrip;

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
//     return view('firstpage',[
//         'head'=> 'value1',
//         'list'=>Descrip::all()
//     ]
// );
// });
Route::get('/home', [homecontroller::class,'index'])->name('home.index')  ; //instead of that 'App\Http\Controllers\homecontroller' we do homecontroller::class
Route::get('/information',[informationcontroller::class,'index'])->name('setting.index');
Route::get('/profil',[profilcontroller::class,'index'])->name('profil.index');
Route::get('/profil/{id}',[profilcontroller::class,'show'])->name('profil.show')
->where('id','\d+');



// Route::get('/description/{id}',function($id){
//  return view('secondpage',['descrip'=> Descrip::find($id)]);
// });




// Route::prefix('/articles')->name('article.')->group(function (){


//     Route::get('/',function (Request $request){
//         //forget use $_GET $_POST,  we will use this object request
        
//         return response("<h1>hh</h1>");
//         return [
//             "name"=>$request->input('name','i\'m the placename'),  //the second parametres appear when we dont put the key name in the url 
//             'all'=>$request->all(),    
//             // "age"=>$request->input('age'),     //input renvoie key specific //all renvoie array of keys and her value/path renvoie path/url renvoie url
//             "article"=>"article 1",
//             'link'=>\route('article.show',['slug'=>'myfirstmethodurl','id'=>15] )];
//     })->name('index');
    
//     Route::get('/{slug}-{id}',function(Request $request ,string $slug,string $id){
//         // dd($request->name.' '.$request->age);
//         return [
//             'slug'=> $slug,
//             'id'=>$id,
//             'name'=>$request->input('name','where is the name'),
//             'all'=>$request->all(), 
//         ];
//     })->where([
//         'id'=>'[0-9]+',
//         'slug'=>'[a-z0-9\-]+'
//     ])->name('show');
// });
// Route::get('/posts/{id}',function($id){
//     ddd($id);
//     return response('post'.$id);
// })->where('id','[0-9]+');