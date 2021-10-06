<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'tables';
    protected $fillable = ['title', 'first_header', 'second_header', 'third_header', 'quarters_header', 'action', 'priority'];
    protected $guarded = [];
}
