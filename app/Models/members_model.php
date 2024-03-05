<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members_model extends Model
{
    use HasFactory;
    protected $table = "members";
    protected $fillable = ['barangay', 'sitio','precint#','sitio_leader','firstname','lastname','middlename','nickname','age','fb_account','contact','address','occupation'];
}
