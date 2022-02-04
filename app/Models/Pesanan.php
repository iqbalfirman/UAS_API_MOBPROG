<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $fillable = ['no_pesanan','nama', 'meja','total'];
    protected $hidden   = ['created_at', 'updated_at'];
}
