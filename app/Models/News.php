<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $table = 'news';
    protected $fillable = [
        'title', 'description', 'content', 'image_id', 'featured', 'view',
    ];
    public function image()
    {
        return $this->hasOne('App\Models\Image');
    }
}
