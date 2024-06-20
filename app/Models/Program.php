<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $primaryKey = 'progcollid';
    protected $fillable = [
        'progid',
        'progfullname',
        'progshortname',
        'progcollid',
        'progcolldeptid'
        ];

    // public function colleges()
    // {
    //     return $this->belongsTo(College::class);
    // }
    
    public function departments()
    {
        return $this->belongsTo(Department::class, 'progcollid', 'deptcollid');
    }
}
