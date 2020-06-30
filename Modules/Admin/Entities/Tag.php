<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name','status'];

    //This is an accesor,It check the Status of the subject and return to the view page
    public function getCheckStatusAttribute()
    {
        return ($this->status == 1) ? 'Active' : 'Inactive' ;
    }

    //This is an mutator,It check the Status of the job_type and set in table
    public function setStatusAttribute($value)
    {
        if ($value=='Active' OR '1') {
        $this->attributes['status'] = '1';
        } else {
            $this->attributes['status'] = '0';
        }


    }
}
