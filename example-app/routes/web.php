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
    return view('welcome');
});

//    today work 27 date 

//    Route names exmaple 
// Route::get('about/first' , function () {
//     return view('first');
// })->name('firstpage');

// Route::get('about/second' , function () {
//     return view('second');
// })->name('secondpage');

// Route::get('about/testing' , function () {
//     return view('three');
// })->name('thiredpage');


// Route::get('/test' , function () {
//     return view('about');
// });

//    Route names exmaple  end



// redirect page pagename convert to another pagename 

// redirect code wiki code temprary page or permently 

Route::redirect('/about' , '/test');
Route::redirect('/three' , '/testing' , 301);

// redirect pagename convert to another pagename end 


//   group pages 
//    common page write only one time use 

Route::prefix('about')->group( function () {
    
    Route::get('/first' , function () {
        return view('first');
    })->name('firstpage');
    
    Route::get('/second' , function () {
        return view('second');
    })->name('secondpage');
    
    Route::get('/testing' , function () {
        return view('three');
    })->name('thiredpage');
    
    
});
      // group pages 
    //  page not found use function fallback 

    Route::fallback(function () {
        return "<h1> Page not found . </h1>";
});
    //  page not found use function fallback 


//    Blade templete using laravl lacture 


  




//    Blade templete using laravl lacture  End




//   end today work 27






// Route::get('/post', function () {
//     return view('about');
//     // return "<h1> hello About page </h1>";
// });





      //  id pass router 
// Route::get('/post/{id}', function ($value) {
//     // return view('about');
//     return "<h1> Post ID :  $value </h1>";
// });
      // id pass router end 







    // laravel constrtuct start 

//   Route::get('/post/{value?}' , function ($value) {
//        return "<h1> Post Value : $value </h1>";
//   })->whereNumber('value');

    // laravel construct end 





    
    //2nd example laravel constrtuct start 

//   Route::get('/post/{value?}' , function ($value) {
//        return "<h1> Post Value : $value </h1>";
//   })->whereIn('value' , ['song' , 'printer']);

    // laravel construct end 




 // example three regular expression using constrtuct start 

//    Route::get('/post/{id?} ', function ($id) {
//        return "<h1> Post ID  : $id </h1>";
//    })->where('id' , "[0-9]+");


    // example three regular expression using constrtuct end 



// Route::get("/post/firstpost" , function () {
//     return view("firstpost");
// });
