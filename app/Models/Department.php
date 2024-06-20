<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $primaryKey = 'deptcollid';
    protected $fillable = [
        'deptid',
        'deptfullname',
        'deptshortname',
        'deptcollid'
        ];
       
    public function colleges()
    {
        return $this->belongsTo(College::class, 'deptcollid', 'collid');
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'progcollid','deptcollid');
    }
}
