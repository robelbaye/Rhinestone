<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    use HasFactory;
    protected $fillable = ['CaseNo',
        'TrademarkName',
        'Trademark',
        'Country',
        'PrimaryAttorney',
        'SecondaryAttorney',
        'PrimaryParalegal',
        'SecondaryParalegal',
        'Agent',
        'NextTaxDate',
        'TaxPaidBy',
        'ExpiryDate',
        'TrademarkPriorityNo',
        'TrademarkPriorityDate',
        'TrademarkApplicationNo',
        'TrademarkApplicationDate',
        'TrademarkRegistrationNo',
        'TrademarkRegistrationDate'];
}
