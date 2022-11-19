<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contractor extends Model
{
    use HasFactory;
    use Notifiable;

    const PENDING = 0;
    const REVEIWING = 1;
    const APPROVED = 2;
    const DECLINED = 3;

    protected $fillable = [
        'company_name',
        'email',
        'phone',
        'mobile',
        'address',
        'year_established',
        'contract_deployed',
        'registrant',
        'registrant_phone',
        'registrant_email',
        'speciality',
        'status'
    ];


}
