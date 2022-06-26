<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_exerces extends Model
{
    use HasFactory;

    public $table = 'users_exerces';

    protected $dateFormat = 'Y-m-d';
}
