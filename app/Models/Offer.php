<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'visa_num',
        'visa_type',
        'visit_type',
        'passport_num',
        'mobile_num',
        'nationality',
        'border_number',
        'visa_expaire_date',
        'email',
        'marital_status',
        'city',
        'renewal_period',
        'mail_box',
        'post_code',
        'address',
        'visa_beneficiaries_num',
        'document_status',
        'total_price',
    ];
}
