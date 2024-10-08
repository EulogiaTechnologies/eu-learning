<?php

namespace App\Models\Program;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveClass extends Model
{
    use HasFactory;

    protected $fillable = ['module_id', 'title', 'start_time', 'end_time', 'provider', 'joining_data', 'force_stop'];

    public function module()
    {
        return $this->belongsTo(ProgramModule::class, 'module_id');
    }
}