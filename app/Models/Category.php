<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected  $guarded = [];
    //  Many Relationship
    public function  blog(){
        return $this->belongsToMany(Blog::class);
    }
}
