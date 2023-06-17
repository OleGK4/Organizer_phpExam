<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PhoneNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
    ];

    public function organizationPhoneNumbers(): HasMany
    {
        return $this->HasMany(OrganizationPhoneNumbers::class);
    }

    public function userPhoneNumbers(): HasMany
    {
        return $this->HasMany(UserPhoneNumbers::class);
    }
}
