<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Models\Article;

class Article extends Model
{
    protected $fillable = ['title','description','image','username','featured_status'];
}
