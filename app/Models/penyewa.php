<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_penyewa';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_penyewa',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_penyewa', 'username');
    }
}