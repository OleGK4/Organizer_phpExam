<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
    ];

    public function userAddress(): HasMany
    {
        return $this->HasMany(UserAddresses::class);
    }

    public function organizationAddress(): HasMany
    {
        return $this->HasMany(OrganizationAddresses::class);
    }

}
