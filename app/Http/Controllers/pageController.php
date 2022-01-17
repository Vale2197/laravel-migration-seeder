<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pageController extends Controller
{
    public function home() {
        
        $packages = Package::paginate(3);

        return view('welcome', compact('packages'));
    }

    public function package($id) {

        $package = Package::find($id);;

        return view('single_package', compact('package'));
    }
}
