<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = [
        'name', 'street', 'city', 'state', 'zip', 'retainer', 'recurring', 'print', 'active', 'in_state', 'consultant',
    ];
    // consultant is table column name in client table
    public function user()
    {
        return $this->belongsTo('App\User', 'consultant');
    }
}
