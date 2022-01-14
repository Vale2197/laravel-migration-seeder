<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home() {
        $packages = Package::all();

        return view('welcome');
    }
}
