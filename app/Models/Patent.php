<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patent extends Model
{
    use HasFactory; 
    
    protected $fillable = [
        "FamilyNo",
        "InternalTitle",
        "FormalTitle",
        "Status",
        "Substatus",
        "TypeofFiling",
        "TypeofSubFiling",
        "Attorney1",
        "Attorney2",
        "Paralegal1",
        "Paralegal2",
        "isLicenced",
        "Licensor",
        "CostCenter",
        "CostCenterCode"
    ];
}
