<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SetupUUID;

class Role extends Model
{
    use HasFactory, SetupUUID;
    protected $table = 'roles';
    protected $guarded = [];



}
