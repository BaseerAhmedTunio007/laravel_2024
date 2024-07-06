<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function showUser() {
        return view('welcome');
    }

    public function user($id) {
        return view('/user', ['userid' => $id]);
    }

    public function Blog() {
        return view('blog');
    }

 

    //
}
