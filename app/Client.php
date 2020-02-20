<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = [
        'id', 'name', 'street', 'city', 'state', 'zip', 'retainer', 'recurring', 'print', 'active', 'in_state', 'consultant',
    ];
    // consultant is table column name in client table
    public function user()
    {
        return $this->belongsTo('App\User', 'consultant');
    }

    public function transactions()
    {
        return $this->hasMany('App\Transaction', 'amount1');
    }
}
