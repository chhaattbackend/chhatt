<?php
namespace App\Http\Resources;
use App\GlobalClass;
use Illuminate\Http\Resources\Json\JsonResource;
class Property extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $globalclass = new GlobalClass;
        $priority = '';
        if ($this->priority == 1) {
            $priority = 'Super Hot';
        } else if ($this->priority == 1) {
            $priority = 'Hot';
        } else {
            $priority = '';
        }
        if ($this->images->isEmpty()) {
            $static_image = [];
            $static_image['original'] = 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg';
            $static_image['thumbnail'] = 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg';
            return [
                'id' => $this->id,
                'user_id' => $this->user_id,
                'agency_id' => $this->agency_id,
                'city' => optional(optional($this->areaOne)->city)->name,
                'area_one_name' => optional($this->areaOne)->name,
                'area_two_name' => optional($this->areaTwo)->name,
                'area_three_name' => optional($this->areaThree)->name,
                // 'name'=>$this->name,
                'address' => $this->address,
                'price' =>  $globalclass->convert_rupee($this->price),
                'size' => $this->size,
                'size_type' => $this->size_type,
                'area_type' => $this->type,
                'property_type' => $this->property_type,
                'property_for' => $this->property_for,
                'bed' => $this->bed,
                'bath' => $this->bath,
                'description' => $this->description,
                'status' => $this->status,
                'deleted' => $this->deleted,
                'priority' => $priority,
                'formatted' => $this->formatted,
                'advertised' => $this->advertised,
                // 'images1'=>$this->images1,
                'longitude' => $this->longitude,
                'latitude' => $this->latitude,
                'latlong' => $this->latitude . ',' . $this->longitude,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
                'images' => [
                    $static_image
                    // 'sort_order'=>$this->sort_order,
                ], //'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg',
                'user' => new User($this->user),
                'social' => new PropertySocial($this->social),
                'per_id' => $this->per_id,
            ];
        } else {
            return [
                'id' => $this->id,
                'user_id' => $this->user_id,
                'agency_id' => $this->agency_id,
                'city' => optional($this->areaOne->city)->name,
                'area_one_name' => optional($this->areaOne)->name,
                'area_two_name' => optional($this->areaTwo)->name,
                'area_three_name' => optional($this->areaThree)->name,
                // 'name'=>$this->name,
                'address' => $this->address,
                'price' =>  $globalclass->convert_rupee($this->price),
                'size' => $this->size,
                'size_type' => $this->size_type,
                'area_type' => $this->type,
                'property_type' => $this->property_type,
                'property_for' => $this->property_for,
                'bed' => $this->bed,
                'bath' => $this->bath,
                'description' => $this->description,
                'status' => $this->status,
                'deleted' => $this->deleted,
                'priority' => $priority,
                'formatted' => $this->formatted,
                'advertised' => $this->advertised,
                'longitude' => $this->longitude,
                'latitude' => $this->latitude,
                'latlong' => $this->latitude . ',' . $this->longitude,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
                'images' => PropertyImage::collection($this->images->sortBy('sort_order')),
                'user' => new User($this->user),
                'social' => new PropertySocial($this->social),
                'per_id' => $this->per_id,
            ];
        }
    }
}
