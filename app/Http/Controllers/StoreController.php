<?php

namespace App\Http\Controllers;

use App\Models\Egg;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function getStoreFeatured() {
        return view('store/featured');
    }


    public function getStoreFoods() {
        $foods = Food::orderBy('updated_at', 'desc')->paginate(12);
        return view('store/foods',['foods' => $foods]);
    }

    public function getStoreEggs() {

        $eggs = Egg::orderBy('updated_at', 'desc')->paginate(8);
        return view('store/eggs', ['eggs' => $eggs, 'category' => "All Eggs"]);
    }
}
