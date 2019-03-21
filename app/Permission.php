<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable=['name','permission_key'];

    function  roles(){
        return $this->belongsToMany('App\Role', 'role_permisisons');
    }
}
