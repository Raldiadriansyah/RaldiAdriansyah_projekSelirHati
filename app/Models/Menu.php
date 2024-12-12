<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;
    protected $guarded =[];

    public function User(): BelongsTo{
        return $this->belongsTo(related: User::class)->withDefault();
    }
    public function pesanan(): HasMany{
        return $this->hasMany(related: pesanan::class);
    }
}
