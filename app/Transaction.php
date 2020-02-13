<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'client_id', 'type', 'description1', 'amount1', 'description2', 'amount2', 'notes', 'check_no',
    ];

    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id');
    }
    public function description()
    {
        return $this->belongsTo('App\Description', 'description1');
    }



    public $sortable = ['create_at'];
}
