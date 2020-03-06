<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expensename extends Model
{
    //
    protected $fillable = [
        'id', 'name',
    ];

    public function expense()
    {
        return $this->belongsTo('App\expense', 'id');
    }

    public $sortable = ['name'];
}
