<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainsController extends Controller {
    public function index() {
        $trains= Train::limit(20)->get();
        return view('welcome', compact('trains'));
    }
}
