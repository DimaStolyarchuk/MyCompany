<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coments extends Model
{
    protected $table = 'coments';
    protected $fillable = ['title', 'first_coments', 'second_coments', 'third_coments', 'action', 'priority'];
    protected $guarded = [];
}
