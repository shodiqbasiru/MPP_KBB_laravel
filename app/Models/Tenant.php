<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    // public function pemohon()
    // {
    //     return $this->belongsTo(Pemohon::class);
    // }

}
