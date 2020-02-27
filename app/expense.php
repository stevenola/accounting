<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expense extends Model
{
    //
    protected $fillable = [
        'id', 'name', 'amount',
    ];

    public function expensename()
    {
        return $this->belongsTo('App\expensename', 'name');
    }

    public $sortable = ['name'];
}
