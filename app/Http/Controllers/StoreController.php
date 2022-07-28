<?php

namespace App\Http\Controllers;

use App\Models\Egg;
use App\Models\Food;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function getStoreFeatured()
    {
        return view('store/featured', ['category' => "FEATURED", 'current' => 'featured']);
    }


    public function getStoreFoods()
    {
        $foods = Food::where('type', 'food')->orderBy('updated_at', 'desc')->paginate(12);
        return view('store/foods', ['foods' => $foods, 'category' => "FOODSTUFFS", 'current' => 'foods']);
    }

    public function getAddFood()
    {
        return view('store/add-food');
    }

    public function postAddFood()
    {
//        'name',
//        'image',
//        'type',
//        'description',
//        'mainStat', // main stat effected by the food
//        'hunger', // bar that must stay full stamina & health won't recharge
//        'magic', // magical damage
//        'stamina', // energy used to cast or attack
//        'strength', // physical damage
//        'defense', // damage resistance
//        'health', // life points
//        'mojo', // breeding success chance
//        'breedableStat', // STRING: stat this food will effect when breeding
//        'breedableStatChance', // INT: % chance of the breedableStat being closer to the higher parent's stat
//        'cost',
//        'owner_id',

        $request->validate([
            'name' => 'required|min:3',
            'image' => 'required',
            'type' => 'required',
            'description' => 'required',
            'mainStat' => 'required',
            'hunger' => 'required',
            'magic' => 'required',
            'stamina' => 'required',
            'strength' => 'required',
            'defense' => 'required',
            'health' => 'required',
            'mojo' => 'required',
            'breedableStat' => 'required',
            'breedableStatChance' => 'required',
            'cost' => 'required',
        ]);
        $mytime = Carbon::now();

        $food = new Food([
            'name' =>  $request->input('name'),
            'image' =>  $request->input('image'),
            'type' =>  $request->input('type'),
            'description' =>  $request->input('description'),
            'mainStat' =>  $request->input('mainStat'),
            'hunger' =>  $request->input('hunger'),
            'magic' =>  $request->input('magic'),
            'stamina' =>  $request->input('stamina'),
            'strength' =>  $request->input('strength'),
            'defense' =>  $request->input('defense'),
            'health' =>  $request->input('health'),
            'mojo' =>  $request->input('mojo'),
            'breedableStat' =>  $request->input('breedableStat'),
            'breedableStatChance' =>  $request->input('breedableStatChance'),
            'cost' =>  $request->input('cost')
        ]);


            if ($request->has('image')) {
                $file = $request->file('image');
                $filename = $request->input('name') . $request->input('type') . "." . $mytime->toDateString() . "." . $file->getClientOriginalExtension();  // multiple extension types
                if($request->hasFile('image')){
                    if($food->profile_image != 'food-default.png'){
                        Storage::disk('s3')->delete($food->profile_image);
                    }
                    Storage::disk('s3')->put($filename, File::get($file));
                    $food->image = $filename;
                }


            $user->save();
            return redirect()->route('profile');
        }
    }

    public function getStorePotions()
    {

        $foods = Food::where('type', 'potion')->orderBy('updated_at', 'desc')->paginate(8);
        return view('store/foods', ['foods' => $foods, 'category' => "POTIONS", 'current' => 'potions']);
    }

    public function getStoreEggs()
    {

        $eggs = Egg::orderBy('updated_at', 'desc')->paginate(8);
        return view('store/eggs', ['eggs' => $eggs, 'category' => "CREATURE EGGS", 'current' => 'eggs']);
    }

    public function getEggs()
    {
            $eggs = Egg::orderby('id','asc')->paginate(8);
        // Fetch all records
        $userData['eggs'] = $eggs;

        echo json_encode($userData);
        exit;
    }

}
