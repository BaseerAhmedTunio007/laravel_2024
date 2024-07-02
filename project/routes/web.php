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

Route::get('/', function () {
    return view('Welcome');
});



Route::get('/post', function(){
    return view('post');
    });

    //    sub route create 
Route::get('/post/firstpage', function(){
    return view('firstpage');
 });



//     // three pages created about,second,thired
    Route::get('/about',function(){
        return view ("about");
    })->name('about_us');

    Route::get('/second',function(){
        return view ("second");
    })->name('second_us');

    Route::get('/test',function(){
        return view("thired");
    })->name('thired_us');

    //  you can change page permantlly are temprary you can use code 301,302
    // Route::redirect('/thired','/test',301);

    // Fallback  use error page show 
    Route::fallback(function(){
        return "PAge is not found";
    });

















Route::get('/post/{id}/comment/{commentid}', function($id , $comment){
     return "<h1> Post Id : ".$id. " . $comment</h1>";
})->where('id','[0-9]+')->whereAlpha('commentid');








  
//   PARAMETER PASS 
 
// Route::get('/post/{id}', function($id)  {

// if($id){
//     return "<h1>POst Id : ".$id."</h1>";
// }else{
//     return "<h1>No found</h1>";
// }

// })->whereNumber('id');


    // multipul routes are pass 
// Route::get('/post/{id?}/comment/{commentid?}', function($id = null , $comment = null)  {

// if($id){
//     return "<h1>POst Id : ".$id."</h1><h2>".$comment."</h2>";
// }else{
//     return "<h1>No found</h1>";
// }

// });

// Route::post("/post/id" , function(){
//     return "You man";
// });




//  route are change  yo u can access the backend the page
// Route::get('/about', function(){
//     return view('post');      route are change
    // return "<h1>Post Page</h1>";
    // });
     

//  shortcut way 
// Route :: view('post','/post');