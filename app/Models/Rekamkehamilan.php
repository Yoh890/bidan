<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekamkehamilan extends Model
{
    use HasFactory;
    protected $table='rekamedis_kehamilan';
    protected $guarded = [];
}
