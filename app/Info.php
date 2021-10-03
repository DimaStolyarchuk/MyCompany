<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    protected $table = 'infos';
    protected $fillable = ['title', 'image', 'second_title', 'description', 'action', 'priority'];
    protected $guarded = [];
}
