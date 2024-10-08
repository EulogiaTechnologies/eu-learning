<?php

namespace App\Models\Program;

use App\Models\Program\Cohort;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'category_id',
        'description',
        'short_description',
        'is_paid',
        'price',
        'discount_flag',
        'discounted_price',
        'publish_date',
        'thumbnail',
        'faqs',
        'requirements',
        'outcomes',
        'meta_keywords',
        'meta_description',
        'status',
        'pending',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function instructors()
    {
        return $this->belongsToMany(User::class, 'program_instructors', 'program_id', 'instructor_id');
    }

    public function cohorts()
    {
        return $this->hasMany(Cohort::class);
    }

    public function modules()
    {
        return $this->hasMany(ProgramModule::class);
    }
}
