<?php

namespace App\Models\Program;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['module_id', 'note'];

    public function module()
    {
        return $this->belongsTo(ProgramModule::class, 'module_id');
    }
}