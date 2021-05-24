<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Property;
use DB;

class DefaultController extends Controller
{
    public function postsToProperties(){
        $a = array();
        $chatprop = DB::table('posts')->get();
        foreach ($chatprop as $property) {
                $array = explode(',', $property->latlng);
            $pro=Property::where('address' , 'like', '%' . $property->address . '%')->where('latitude',$array[0])->where('longitude',$array[1])->first();
            if ($pro != null) {
                $name=optional($pro->user)->name;
                // dd($name);
                // dd($property->user_name);
                if($property->user_name==$name){
                    // dd($property->id);
                    $pro->update([
                        'per_id'=> $property->id
                    ]);
                }
            } else {
        array_push($a, $property->id);
            }
        }
        dd('done');
    }
}