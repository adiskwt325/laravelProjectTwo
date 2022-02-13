<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    
    protected $table = 'user_infos';

      protected $fillable = [
        'firstname', 'lastname', 'age',
    ];

    public function user_addresses(){

        return $this->hasMany('App\User_addresse');

    }


}
