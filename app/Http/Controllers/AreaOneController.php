<?php

namespace App\Http\Controllers;

use App\Agency;
use App\Agent;
use App\AgentSpeciality;
use App\AreaOne;
use App\AreaThree;
use App\AreaTwo;
use App\City;
use App\Lead;
use App\LeadProject;
use App\Property;
use App\PropertyImage;
use App\PropertySocial;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;

class AreaOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        // $agenciesold=DB::table('agencies1')->get();
        // foreach($agenciesold as $agency){
        //     Agency::where('name',$agency->name)->update([
        //         'image'=>$agency->thumbnail
        //     ]);
        // }

        // $oldleads = \DB::table('leads11')->get();
        // foreach ($oldleads as $oldlead) {

        //     Lead::create([

        //         'project_id' => $oldlead->project_id,
        //         'name' => $oldlead->name,
        //         'phone' => $oldlead->phone,
        //         'email' => $oldlead->email,
        //         'description' => $oldlead->description,
        //         'area' => $oldlead->area,
        //         'budget' => $oldlead->budget,
        //         'lead_type' => $oldlead->lead_type,
        //         'how_soon' => $oldlead->how_soon,
        //         'family_members' => $oldlead->family_members,
        //         'property_type' => $oldlead->property_type,
        //         'leadsource' => $oldlead->leadsource,
        //         'status' => $oldlead->lead_status,
        //         'call_status' => $oldlead->call_status,
        //         'response_status' => $oldlead->response_status,
        //         'created_by' => $oldlead->created_by,
        //     ]);
        // }

        // $leads = Lead::all();
        // foreach ($leads as $lead) {
        //     if ($lead->project_id != null) {
        //         if ($lead->project_id == 4) {
        //             LeadProject::create([
        //                 'lead_id' => $lead->id,
        //                 'project_id' => 2
        //             ]);
        //         } else if($lead->project_id == 5){
        //             LeadProject::create([
        //                 'lead_id' => $lead->id,
        //                 'project_id' => 4
        //             ]);
        //         }
        //         else if($lead->project_id == 6){
        //             LeadProject::create([
        //                 'lead_id' => $lead->id,
        //                 'project_id' => 3
        //             ]);
        //         }
        //         else if($lead->project_id == 1){
        //             LeadProject::create([
        //                 'lead_id' => $lead->id,
        //                 'project_id' => 1
        //             ]);
        //         }


        //     }
        // }

        if (!$request->keyword) {
            $areaones = AreaOne::paginate(25);
        } else {
            $areaones = AreaOne::where('name', 'like', '%' . $request->keyword . '%')
                ->paginate(25)->setPath('');
            $pagination = $areaones->appends(array(
                'keyword' => $request->keyword
            ));
        }
        return view('admin.area_one.index', compact('areaones'));




        // $clients = DB::table('clients')->get();
        // foreach ($clients as  $value) {
        //     $user = User::where('name', $value->name)->orWhere('phone', $value->phone)->first();
        //     $agent = Agent::where('user_id', $user->id)->first();
        //     // dd($value->d_id);
        //     AgentSpeciality::create([
        //         'agent_id' => $agent->id,
        //         'speciality_id' => $value->d_id,
        //     ]);
        // }
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areaones = AreaOne::all();
        $cities = City::all();
        return view('admin.area_one.create', compact('areaones', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AreaOne::create($request->all());
        return redirect()->route('areaones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\areaone  $areaone
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
                Artisan::call('migrate:fresh');


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\areaone  $areaone
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $areaone = AreaOne::find($id);
        $cities = City::all();
        return view("admin.area_one.edit", compact('areaone', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\areaone  $areaone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $areaone = AreaOne::find($id);
        $areaone->update($request->all());

        return redirect()->route('areaones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\areaone  $areaone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = AreaOne::find($id);
        $item->delete();
        return redirect()->back();
    }
}
