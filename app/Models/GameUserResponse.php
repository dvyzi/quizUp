<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameUserResponse extends Model
{
    use HasFactory;

    public function gameUser()
    {
        return $this->belongsTo(GameUser::class);
    }
}
