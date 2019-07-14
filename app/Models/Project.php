<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $table = 'projects';
    protected $fillable = [
        'title', 'overview', 'price', 'acreage', 'location', 'content', 'map', 'slug', 'sold', 'view',
    ];
     public function image()
    {
        return $this->hasOne('App\Models\Image');
    }
   
}
