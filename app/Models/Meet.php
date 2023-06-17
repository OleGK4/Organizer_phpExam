<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Meet extends Model
{
    use HasFactory;

    protected $fillable = [
        'headers',
        'description',
    ];

    public function meetOrganizations(): HasMany
    {
        return $this->HasMany(MeetOrganization::class);
    }
}
