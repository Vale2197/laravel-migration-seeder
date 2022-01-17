<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home() {
        
        $packages = Package::paginate(3);

        return view('welcome', compact('packages'));
    }

    public function package($id) {

        $packages = Package::all();

        return view('single_package', compact('packages'));
    }
}
