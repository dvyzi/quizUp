<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'question';

    protected $fillable = [
        'quizId',
        'label',
        "image",
        "order"
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
