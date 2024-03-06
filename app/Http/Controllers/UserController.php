<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('homepage', ['title' => 'Home']);
    }

    public function userFormOne(){
        //
        return view('user.forms.formOne', ['title' => 'Form One']);
    }


    public function adminKedaiKopi(){
        //
        return view('admin.tables.kedaiKopi', ['title' => 'Kedai Kopi']);
    }
}
