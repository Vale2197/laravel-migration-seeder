<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PackageController extends Controller
{
    public function index() {
        
        $packages = Package::paginate(3);

        return view('package.index', compact('packages'));
    }

    public function show($id) {

        $package = Package::find($id);

        return view('package.show', compact('package'));
    }

}
