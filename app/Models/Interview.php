<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'date',
        'time',
        'count',
        'type'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }
}
