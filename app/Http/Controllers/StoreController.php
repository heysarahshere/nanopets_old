<?php

namespace App\Http\Controllers;

use App\Models\Egg;
use App\Models\Food;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function getStoreFeatured()
    {
        return view('store/featured', ['category' => "FEATURED", 'current' => 'featured']);
    }


// --------------------------------------------------------------------------------------------- food
    public function getStoreFoods()
    {
        $foods = Food::where('type', 'food')->orderBy('updated_at', 'desc')->paginate(12);
        return view('store/foods', ['foods' => $foods, 'category' => "FOODSTUFFS", 'current' => 'foods']);
    }

    public function getAddFood()
    {
        return view('store/add-food');
    }

    public function postAddFood(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required',
            'description' => 'required',
            'mainStat' => 'required',
            'cost' => 'required',
        ]);

        $food = new Food([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'description' => $request->input('description'),
            'mainStat' => $request->input('mainStat'),
            'hunger' => $request->has('hungerInput'),
            'magic' => $request->has('magicInput') ? $request->input('magicInput') : 0,
            'stamina' => $request->has('staminaInput') ? $request->input('staminaInput') : 0,
            'strength' => $request->has('strengthInput') ? $request->input('strengthInput') : 0,
            'defense' => $request->has('defenseInput') ? $request->input('defenseInput') : 0,
            'health' => $request->has('healthInput') ? $request->input('healthInput') : 0,
            'mojo' => $request->has('mojoInput') ? $request->input('mojoInput') : 0,
            'breedableStat' => $request->input('mainStat'),
            'breedableStatChance' => $request->has('statChanceInput') ? $request->input('statChanceInput') : 0,
            'cost' => $request->input('cost')
        ]);

            $file = $request->file('image');
            $filename = "/images/foods/" . trim($request->input('name')) . time() . "." . $file->getClientOriginalExtension();  // multiple extension types
            if($request->hasFile('image')){

//                 Save locally first to folder called 'uploads', in app/storage/uploads
//                $save_local = Storage::put('file-uploads', $file);

                // Get base location of stored file
//                $storage_path  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
//                $local_url = $storage_path . $save_local;

                // Save to S3 (Grab the file object and stream it to S3 to a folder called 'file-uploads'. File is set to a public file that can be accessed by URL.
//                $savetoS3 = Storage::disk('s3')->putFile('file-uploads', new File($local_url), 'public');

                // Delete local copy so it does not take space on your server
//                Storage::delete($save_local);

                Storage::disk('public')->put($filename, File::get($file));
                $food->image = $filename;
            }

        $food->save();
        return redirect()->route('foods');
    }

    public function postDeleteFood($id) {
        $food = Food::find($id);
        $food->delete();
        return redirect('store/foods');
    }

    public function postUpdateFood(Request $request, $id)
    {

        $this->validate($request, [
            'name' =>  'required|max:60',
            'description' =>  'required|max:500',
            'species' =>  'required',
            'gender' =>  'required',
            'size' =>  'required',
            'shedInput' =>  'required',
            'furInput' =>  'required'
        ]);

        // find and update old pet instead
        $food = Food::find($id);
        $food->update([
            'name' =>  $request->input('name'),
            'description' =>  $request->input('description'),
            'species' =>  $request->input('species'),
            'breed' =>  $request->input('breed'),
            'gender' =>  $request->input('gender'),
            'size' =>  $request->input('size'),
            'age' =>  $request->input('age'),
            'weight' =>  $request->input('weight'),
            'status' =>  $request->input('status'),
            'fur_level' =>  $request->input('furInput')
        ]);
        // erase any whitespace in name first
        if($request->has('image')) {
            $file = $request->file('image');
            $filename = $request->input('name') . '1.' . $file->getClientOriginalExtension();  // multiple extension types
            if($request->hasFile('image')){
                Storage::disk('s3-foods')->put($filename, File::get($file));
                $food->image1_url = $filename;
            }
        }

        $food->save();

        return redirect('store/foods');
    }

    public function getUpdateFood($id)
    {
        $food = Food::find($id);
        return view('store/foods', ['food' => $food]);
    }
// --------------------------------------------------------------------------------------------- end food

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
        $eggs = Egg::orderby('id', 'asc')->paginate(8);
        // Fetch all records
        $userData['eggs'] = $eggs;

        echo json_encode($userData);
        exit;
    }

}
