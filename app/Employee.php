<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [

        'sched_id',
        'user_id',
        'isActive',
        'address',
        'contact_no',
        'resume_id',
        'salary',
        'skill',
        'status_id',
        'sss',
        'tin',
        'pagibig',
        'philhealth',
        'department_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function schedule(){
        return $this->belongsTo('App\Schedule','sched_id');
    }
    public function resume(){
        return $this->belongsTo('App\Resume');
    }
    public function status(){
        return $this->belongsTo('App\Status');
    }
    public function department(){
        return $this->belongsTo('App\Department');
    }

}
