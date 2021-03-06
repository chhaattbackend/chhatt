<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;;

use App\Http\Resources\PropertySocialCollection;
use App\PropertySocial;
use Illuminate\Http\Request;

class PropertySocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
        $this->guard = "api";
    }
    public function index()
    {
        $propertysocial=PropertySocial::orderBy('created_at','desc')->paginate(25);

        return new PropertySocialCollection($propertysocial);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        PropertySocial::create([
            'property_id' => $request->property_id,
            'clicks' => '1'
        ]);


        return response()->json([
            'success'=>true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PropertySocial  $propertySocial
     * @return \Illuminate\Http\Response
     */
    public function show(PropertySocial $propertySocial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PropertySocial  $propertySocial
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertySocial $propertySocial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PropertySocial  $propertySocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertySocial $propertySocial)
    {
        return response()->json([
            'success'=>true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PropertySocial  $propertySocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertySocial $propertySocial)
    {
        //
    }
}
