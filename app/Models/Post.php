<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class, 'post_categories');
    // }

    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class, 'post_tags');
    // }

    // public function getCreatedAttribute($data)
    // {
    //     return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data)->format('Y-m-d');
    // }
}