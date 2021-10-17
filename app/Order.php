<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['name', 'email', 'tel', 'subject', 'message'];
    protected $guarded = [];
}
