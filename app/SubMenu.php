<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $fillable=['module_id','menu','tree_view','module_icon','url','module_key'];


    public function module(){
        return $this->belongsTo('App\Module','module_id');
    }

}
