<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    const PENDING_REJECTED = 0;
    const ACCEPTED = 1;
    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'university_id',
        'image',
        'comment',
        'grade',
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'answer5',
        'answer6',
        'answer7',
        'answer8',
        'answer9',
        'answer10',
        'answer11',
        'answer12',
        'answer13',
        'answer14',
        'answer15',
        'answer16',
        'answer17',
        'answer18',
        'answer19',
        'answer20',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
