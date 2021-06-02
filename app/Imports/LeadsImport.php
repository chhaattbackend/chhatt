<?php

namespace App\Imports;

use App\Agency;
use App\Agent;
use App\AreaTwo;
use App\Lead;
use App\LeadProject;
use App\Project;
use App\Property;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Throwable;

class LeadsImport implements ToModel, WithHeadingRow
{
   public  $val;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        if($row['sn'] != null){
            if (!isset($row['bed'])) {
                $row['bed'] = null;
            }


            $row['mobile'] = str_replace('-', '', $row['mobile']);
            if ($row['phase'] == 'II') {
                $row['phase'] = str_replace('II', 'Phase 2', $row['phase']);
            }
            if ($row['phase'] == 'I') {
                $row['phase'] = str_replace('I', 'Phase 1', $row['phase']);
            }
            if ($row['phase'] == 'III') {
                $row['phase'] = str_replace('III', 'Phase 3', $row['phase']);
            }
            if ($row['phase'] == 'IV') {
                $row['phase'] = str_replace('IV', 'Phase 4', $row['phase']);
            }
            if ($row['phase'] == 'V') {
                $row['phase'] = str_replace('V', 'Phase 5', $row['phase']);
            }
            if ($row['phase'] == 'VI') {
                $row['phase'] = str_replace('VI', 'Phase 6', $row['phase']);
            }
            if ($row['phase'] == 'VII') {
                $row['phase'] = str_replace('VII', 'Phase 7', $row['phase']);
            }
            if ($row['phase'] == 'VIII') {
                $row['phase'] = str_replace('VIII', 'Phase 8', $row['phase']);
            }
            if ($row['phase'] == 'II Ext') {
                $row['phase'] = str_replace('II Ext', 'Phase 2 Ext', $row['phase']);
            }
            if ($row['phase'] == 'V Ext') {
                $row['phase'] = str_replace('V Ext', 'Phase 5 Ext', $row['phase']);
            }
            if ($row['phase'] == 'VII Ext') {
                $row['phase'] = str_replace('VII Ext', 'Phase 7 Ext', $row['phase']);
            }
            if ($row['phase'] == 'VIII Ext') {
                $row['phase'] = str_replace('VIII Ext', 'Phase 8 Ext', $row['phase']);
            }
            $row['phase'] = AreaTwo::where('name', $row['phase'])->first();
            $size = explode('yds', $row['area']);
            if ($size == $row['area']) {
                $size = explode('sqft', $row['area']);
                $size_type = 'Sq ft';
            } else {
                $size_type = 'yards';
            }
            //----------------------SCRIPTING------------------------------------------------//


            // if($this->get == 1){
            //      dd($val);
            // }
            $this->val .= $row['sn'];
            $user = User::where('name',  'like', '%' . $row['contact_person'] . '%')->where('phone', $row['mobile'])->first();
            if ($user == null) {
                try{

                    User::create([
                        'name' =>  $row['contact_person'],
                        'phone' =>  $row['mobile'],
                        'role_id' => 3,
                    ]);



                }
                catch(Throwable $e){

                    dd('mera dd'.$this->val);


                }
            }
            $agency = Agency::where('name', $row['agency_name'])->where('area_one_id', 6)->first();
            $user = User::where('name', $row['contact_person'])->where('phone', $row['mobile'])->first();
            if ($agency == null) {
                Agency::create([
                    'name' =>  $row['agency_name'],
                    'user_id' => $user->id,
                    'area_one_id' => 6,
                    'area_two_id' => $row['phase']->id,
                    'status' => 1,
                    'verified' => 1,
                ]);
            }
            $agency = Agency::where('name', $row['agency_name'])->where('area_one_id', 6)->first();
            $agent = Agent::where('user_id', $user->id)->where('agency_id', $agency->id)->first();
            if ($agent == null) {
                Agent::create([
                    'user_id' => $user->id,
                    'agency_id' => $agency->id,
                ]);
            }
            $properties = Property::where('user_id', $user->id)->where('address', $row['street_or_features'])->first();
            if ($properties == null) {
                $get = '';
                $get  = $row['area'].' '.$row['type'].' '.$row['property_type'].' '.$row['for'].' DHA '.$row['phase']->name;

                Property::create([
                    'user_id' => $user->id,
                    'agency_id' => $agency->id,
                    'area_one_id' => 6,
                    'area_two_id' => $row['phase']->id,
                    'area_three_id' => null,
                    'address' => $row['street_or_features'],
                    'price' => null,
                    'size' => $size[0],
                    'size_type' => $size_type,
                    'type' => $row['type'],
                    'property_for' => $row['for'],
                    'property_type' => $row['property_type'],
                    'bed' => $row['bed'],
                    'bath' => null,
                    'description' => $get,
                    'priority' => 3,
                    'status' => 1,
                    'formatted' => 1,
                    'social_type_id' => 2,
                    'group_id' => null,
                    'structured' => 1,


                ]);

            }
        }

        //dd($row['project']);
        // $leadsource =null;
        // $leadsource =
        // $fuzoolnames=array('Islamabad','Rent','UAE','Islamabad(Karachi)','Islamabad-Interest',);
        // $replace_by=array('','','','','');
        // $project_name=trim(str_ireplace($fuzoolnames,$replace_by,$row['project']));
        // $project_name = explode(" ",$row['project']);
        // $project = Project::where('name', 'like', '%' .$project_name[0]. '%')->first();
        // $lead = Lead::create([
        //     'name'     => $row['name'],
        //     'email'    => $row['email'],
        //     'phone'     => $row['phone'],
        //     'leadsource'    => $row['project'],
        //     'created_at'    => $row['created_at'],
        //     ]);
        //     LeadProject::create([
        //         'project_id'=>$project->id,
        //         'lead_id'=>$lead->id
        //     ]);
        //     return $lead;







        //--------------------Initial--------------------------//

        ////////////////////////////////////
        ////////////////////////
        // if ($request->hasFile('images')) {
        //     $this->globalclass->storeMultipleS3($request->file('images'), 'properties', $property->id);
        // } else {
        //     $contents = file_get_contents('https://maps.googleapis.com/maps/api/staticmap?center=' . $request->latlong . '&zoom=18&size=640x450&maptype=satellite&markers=icon:https://chhatt.com/StaticMap/Pins/marker1.png%7C'.$request->latitude.','.$request->longitude.'&key=AIzaSyAAdMS03mAk6qDSf4HUmZmcjvSkiSN7jIU');
        //     $filename = 'marker' . time() . 'png';
        //     Storage::disk('s3')->put('properties/StaticMap/' . $filename, $contents);
        //     PropertyImage::create([
        //         'property_id' => $property->id,
        //         'name' => 'StaticMap/' . $filename,
        //         'sort_order' => 9
        //     ]);
        // }
    }

    //homie
}
