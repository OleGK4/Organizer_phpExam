<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MeetOrganization extends Model
{
    use HasFactory;

    public function meetOrganizations(): BelongsTo
    {
        return $this->BelongsTo(Meet::class);
    }
}
