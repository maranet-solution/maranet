<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    // use database called about
    protected $table = "about";
    use HasFactory;

    protected $fillable = [
        "mission",
        "vission",
        "stragegy",
    ];
}
