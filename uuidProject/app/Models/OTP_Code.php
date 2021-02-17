<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SetupUUID;

class OTP_Code extends Model
{
    use HasFactory, SetupUUID;

    protected $table = 'otp_codes';
    protected $guarded = [];


}
