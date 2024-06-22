<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use App\Traits\HasRolesAndPermissions;
use  Illuminate\Contracts\Auth\Authenticatable as  AuthenticatableContract;
class Admin extends Model implements AuthenticatableContract
{
    use HasFactory, HasRolesAndPermissions, Authenticatable;

    protected $guarded = [];
    protected $table = 'admins';


    protected static $logAttributes = ['name','email'];
}

