<?php

namespace App\Models\Program;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramResource extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'title',
        'upload_type',
        'file',
    ];
}
