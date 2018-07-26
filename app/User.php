<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'middlename',
        'lastname',
        'email',
        'password',
        'photo_id',
        'isActive',
        'job_id',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function employee(){
        return $this->belongsTo('App\Employee','id');
    }
    public function job(){
        return $this->belongsTo('App\Job');
    }

    public function isAdmin(){
        if($this->job != null && $this->job->job_id == 'Human Resource'  ){
            return true;
        }else{
            return false;
        }
    }
    public function isPayroll(){
        if($this->job != null && $this->job->job_id == 'Payroll'  ){
            return true;
        }else{
            return false;
        }

    }


}
