<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyRecord extends Model
{
    use HasFactory;

    protected $fillable = ['subject_id', 'study_date', 'hours'];

    public function subject() {
        return $this->belongsTo(subject::class);
    }
}
