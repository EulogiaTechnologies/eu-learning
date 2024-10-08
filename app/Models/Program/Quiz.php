<?php

namespace App\Models\Program;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['module_id', 'title'];

    public function module()
    {
        return $this->belongsTo(ProgramModule::class, 'module_id');
    }
}