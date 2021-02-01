<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['first_name', 'last_name','email','phone',
    'hire_date','job_id','salary','commission','manager_id','department_id'];

    public function getFullName()
    {
        return "$this->first_name $this->last_name";
    }

    public function getJob()
    {
        return Job::find($this->job_id);
    }
}
