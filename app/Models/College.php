<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $primaryKey = 'collid';
    protected $fillable = [
        'collid',
        'collfullname',
        'collshortname'
        ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    
    public function departments()
    {
        return $this->hasMany(Department::class, 'deptcollid', 'collid');
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
