<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='posts';
    protected $fillable = [
        'title', 'image_url', 'author','date','content','category_id'
    ];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
