<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cashflow extends Model
{
    //
    protected $fillable = [
        'amount', 'created_at',
    ];

    public $sortable = ['created_at'];
}
