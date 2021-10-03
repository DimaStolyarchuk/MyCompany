<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'homes';
    protected $fillable = ['image', 'action', 'priority'];
    protected $guarded = [];
}
