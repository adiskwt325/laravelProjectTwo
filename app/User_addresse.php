<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_addresse extends Model
{
    protected $table = 'user_addresses';

    public function user_infos(){

        return $this->belongsTo('App\User_info');

    }
}
