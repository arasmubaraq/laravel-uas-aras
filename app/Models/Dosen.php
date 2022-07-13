<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = "tb_dosen";

    protected $primaryKey = 'dosen_id';
    
    protected $guarded = [];

}
