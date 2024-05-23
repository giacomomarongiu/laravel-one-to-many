<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'slug', 'img', 'start_date', 'end_date', 'description', 'project_link','github_link'];

    use HasFactory;
}
