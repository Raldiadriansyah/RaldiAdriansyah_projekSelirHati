<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pesanan extends Model
{
    protected $guarded =[];
    protected $fillable = [
        'menu_id', 
        'admin_id',
        'jumlah',
        'total',
        'status',
    ];
    /** @use HasFactory<\Database\Factories\PesananFactory> */
    use HasFactory;
    public function User(): BelongsTo{
        return $this->belongsTo(User::class, 'admin_id')->withDefault();
    }
    public function Menu(): BelongsTo{
        return $this->belongsTo(related: Menu::class)->withDefault();
    }
}
