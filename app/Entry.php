<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entrys';
    protected $fillable = ['email', 'password', 'action', 'priority'];
    protected $guarded = [];
}
