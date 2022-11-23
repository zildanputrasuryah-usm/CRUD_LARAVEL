<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa2 extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];
    protected $primaryKey = 'nim';
    public $incrementing = false;
}
