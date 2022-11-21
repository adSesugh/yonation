<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Contractor extends Model implements HasMedia
{
    use HasFactory;
    use Notifiable;
    use InteractsWithMedia;

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
        'status',
        'slug'
    ];


}
