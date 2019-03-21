<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=['name'];

    function  permissions(){
        return $this->belongsToMany('App\Permission', 'role_permissions');
    }
}
