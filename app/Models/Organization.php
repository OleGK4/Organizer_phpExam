<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function meetOrganizations(): HasMany
    {
        return $this->HasMany(MeetOrganization::class);
    }

    public function users(): HasMany
    {
        return $this->HasMany(MeetOrganization::class);
    }

    public function phoneNumbers(): HasMany
    {
        return $this->HasMany(PhoneNumber::class);
    }

    public function adresses(): HasMany
    {
        return $this->HasMany(Address::class);
    }
}
