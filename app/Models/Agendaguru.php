<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendaguru extends Model
{
    use HasFactory;
    protected $table = 'agendas';
    protected $guarded = [];
}
