<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
}
// Imageモデルに追加
public function tweets()
{
    return $this->belongsToMany(Tweet::class, 'tweet_images');
}
