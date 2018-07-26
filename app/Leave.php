<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $fillable = ['leave_type','start','end','reason','status','user_id','email'];

    public function user(){
        return $this->hasMany('App\User');
    }
}
