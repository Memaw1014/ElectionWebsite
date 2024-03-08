<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members_model extends Model
{
    protected $table = 'members';

    protected $fillable = [
        'barangay', 'sitio', 'precint#', 'sitio_leader', 'firstname', 'middlename', 'nickname',
        'lastname', 'age', 'fb_account', 'contact', 'address', 'occupation',
        'voted_on_2023', 'organization', 'beneficiary',
    ];

    // If your checkbox fields are JSON columns, you might need to cast them
    protected $casts = [
        'voted_on_2023' => 'array',
        'organization' => 'array',
        'beneficiary' => 'array',
    ];
}
