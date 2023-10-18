<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PHamil extends Model
{
    use HasFactory;
    protected $table='pasien_hamil';
    protected $guarded = [];
}
