<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function getStoreFeatured() {
        return view('store/featured');
    }
}
