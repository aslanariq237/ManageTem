<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    protected $fillable = [
        "nama_pelanggan",
        "number_phone",
        "contact"
    ];
}