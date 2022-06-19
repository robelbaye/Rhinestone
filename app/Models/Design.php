<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;
    protected $fillable = [
        "CaseNo",
        "InternalTitle",
        "FormalTitle",
        "TypeofFiling",
        "SubTypeofFiling",
        "Status",
        "SubStatus",
        "Country",
        "PrimaryAttorney",
        "SecondaryAttorney",
        "PrimaryParalegal",
        "SecondaryParalegal",
        "Agent",
        "AgentRef",
        "Agent2",
        "Agent2Ref",
        "CostCenter",
        "CostCenterCode",
        "Licence",
        "NoofDrawing",
        "NoofView",
        "NextTaxDate",
        "NextAnnualyNo",
        "TaxPaidBy",
        "ExpireDate",
        "DesignPriorityNo",
        "PCountry",
        "PDate",
        "DesignAppNo",
        "ACountry",
        "ADate",
        "RegistrationNo",
        "RCountry",
        "RDate"
    ];
}
