<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $table = "response";

    protected $fillable = [
        "value",
        "badAnswer",
        "status",
        "hostId"
    ];
}
