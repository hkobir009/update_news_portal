<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(category::class,'category_post')->withTimestamps();
    }

    public function tags()
    {
        return $this->belongsToMany(tag::class)->withTimestamps();
    }


}
