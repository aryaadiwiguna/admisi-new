<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pmb extends Model
{
    use HasFactory;

    protected $table      = 'pmb';
    protected $primaryKey = 'id_pmb';
    protected $guarded    = ['id_pmb'];
}
