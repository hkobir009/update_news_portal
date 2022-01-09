<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->belongsToMany('App\Models\post')->withTimestamps();
    }
    public function childs()
    {
        return $this->hasMany(category::class,'parent_id');
    }

}
