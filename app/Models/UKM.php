<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UKM extends Model
{
    use HasFactory;
    protected $table = 'ukms';
    protected $fillable = [
        'nama_ukm', 'pembina'
    ];
} 