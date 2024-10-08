<?php

namespace App\Models\Program;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    use HasFactory;

    protected $fillable = ['program_id', 'title', 'start_date', 'end_date'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}