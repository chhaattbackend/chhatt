<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'user_id',
        'agency_id',
        'area_one_id',
        'area_two_id',
        'area_three_id',
        'name',
        'address',
        'price',
        'size',
        'size_type',
        'type',
        'property_for',
        'property_type',
        'bed',
        'bath',
        'image',
        'description',
        'progress',
        'priority',
        'advertised',
        'images',
        'images1',
        'longitude',
        'latitude',
        'property_type',
        'category',
        'deleted',
        'status',
        'formatted',
        'list_type',
        'structured',
        'per_id',
        'social_type_id',
        'group_id',
        'bulk',
        'social_type_id',
        'group_id',
        'inventory_type',
        'platform',
    ];

    public function user()
    {

        return $this->belongsTo(User::class, 'user_id');
    }
    public function agency()
    {
        return $this->belongsTo(Agency::class, 'agency_id');
    }

    public function areaOne()
    {
        return $this->belongsTo(AreaOne::class, 'area_one_id');
    }
    public function areaTwo()
    {
        return $this->belongsTo(AreaTwo::class, 'area_two_id');
    }
    public function areaThree()
    {
        return $this->belongsTo(AreaThree::class, 'area_three_id');
    }

    public function images()
    {
        return $this->hasMany(PropertyImage::class, 'property_id');
    }

    public function social(){
        return $this->hasOne(PropertySocial::class,'property_id');
    }
    public function propertyFor(){
        return $this->belongsTo(PropertyFor::class,'property_for');
    }
}
