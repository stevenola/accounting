<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expensename extends Model
{
    //
    protected $fillable = [
        'id', 'name',
    ];

    public $sortable = ['name'];
}
