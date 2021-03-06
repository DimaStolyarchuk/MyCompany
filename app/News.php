<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['title', 'image', 'description', 'action', 'priority'];
    protected $guarded = [];
}
