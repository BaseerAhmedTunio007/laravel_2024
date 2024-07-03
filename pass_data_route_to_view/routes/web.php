<?php

// use Illuminate\Support\Facades\Route;

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

//    create a new function   
// function  getuser() {
//      [ 
//             1 => ['name' => 'Baseer Ahmed' ,  'phone' => '48374874' , 'city' => 'Khananwahan' ],
//             2 => ['name' => 'Faraz' ,  'phone' => '48374874' , 'city' => 'Khananwahan' ], 
//             3 => ['name' => 'Rashid' ,  'phone' => '48374874' , 'city' => 'Khananwahan' ], 
//             4 => ['name' => 'faheem' ,  'phone' => '48374874' , 'city' => 'Khananwahan' ],
//         ];
// }; 
 
// Route::get('/', function () {
//     return view('welcome');
// });
 

// Route::get('/users' , function ( ) {
    //    1st way start 
    // return view('/users' , ['name' => 'Baseer Ahmed']); 
    //    1st way end here
     
    //    2nd way start here 
    // $name = "Baseer Ahmed Tunio ";
    // return view('/users' , ['name' => $name]); 2nd way through variable
    //    2nd way end here 
         

    //   3ed way myltipul values inserted 
    // $name = "Baseer Ahmed";
    // $city = "khanwahan";
    // return view('/users' , ['name' => $name , 'city' => $city]);
    //   3ed way myltipul values inserted 
  


    //  4th way start here with key word use 
    // $name = ' Baseer Ahmed ';
    // $city = 'Hyderabad';
    // return view('users')->with('name' , $name)->with('city' , $city);
    //  4th way End here with key word use 


    // 5th way usehere with key 
    // $name = ' Baseer Ahmed ';
    // $city = 'Karachi';

    // return view('users')->withName($name)->withCity($city);




    // 5th way usehere with key end
    // if city is empty you can use it this way 
    // $name = ' Baseer Ahmed ';
    // $city = 'Sakrand';

    // return view('/users' , ['name' => $name , 'city' => $city ]);
    // if city is empty you can use it this way end





    // Start array with key 
 

        // $names = [ 
        //     1 => ['name' => 'Baseer Ahmed' ,  'phone' => '48374874' , 'city' => 'Khananwahan' ],
        //     2 => ['name' => 'Faraz' ,  'phone' => '48374874' , 'city' => 'Khananwahan' ], 
        //     3 => ['name' => 'Rashid' ,  'phone' => '48374874' , 'city' => 'Khananwahan' ], 
        //     4 => ['name' => 'faheem' ,  'phone' => '48374874' , 'city' => 'Khananwahan' ],
        // ];
    //     return view('users' , [
    //         'user' => $names,
    //   ]);
    // end array multipul values send 


    //   use this function 
    //      $names = getuser();  // calling user function 
    //     return view('users' , [
    //         'users' => getuser(),
    //     ]);
    

    // });


    // new route created the single value show 
    // Route::get('/user/{id}' , function ($id) {
    //     $single = getuser();
    //     $user   = $single[$id];
    //   return view('/user' , ['id' => $user]);
        // return "<h1> users id" . $id . "</h1>";
    // })->name('userid');
   



    // chatgpt help 

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

// Function to get users
function getuser() {
    return [
        1 => ['name' => 'Baseer Ahmed', 'phone' => '48374874', 'city' => 'Khananwahan'],
        2 => ['name' => 'Faraz', 'phone' => '48374874', 'city' => 'Khananwahan'],
        3 => ['name' => 'Rashid', 'phone' => '48374874', 'city' => 'Khananwahan'],
        4 => ['name' => 'Faheem', 'phone' => '48374874', 'city' => 'Khananwahan'],
    ];
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $users = getuser();
    return view('users', ['users' => $users]);
});

// New route created to show a single user value
Route::get('/user/{id}', function ($id) {
    $users = getuser();
    if (isset($users[$id])) {
        $user = $users[$id];
        return view('user', ['user' => $user]);
    }
    return abort(404);
})->name('userid');
