<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Метод dashboard создал, возвращает views админ панели
    public function dashboard() {
        return view('admin.layout');
    }
}
