<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Pengeluaran extends Model
{
    /** @use HasFactory<\Database\Factories\PengeluaranFactory> */
    use HasFactory;
    protected $fillable = [
        'nama', 
        'harga',
        'jumlah',
        'total',
        'admin_id',
    ];
    public function User(): BelongsTo{
        return $this->belongsTo(User::class, 'admin_id')->withDefault();
    }
}
