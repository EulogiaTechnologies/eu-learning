<?php

namespace App\Models\Program;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordedClass extends Model
{
    use HasFactory;

    protected $fillable = ['module_id', 'title', 'video_url'];

    public function module()
    {
        return $this->belongsTo(ProgramModule::class, 'module_id');
    }
}
