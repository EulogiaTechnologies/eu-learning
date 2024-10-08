<?php

namespace App\Models\Program;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = ['module_id', 'title', 'instructions', 'due_date'];

    public function module()
    {
        return $this->belongsTo(ProgramModule::class, 'module_id');
    }
}