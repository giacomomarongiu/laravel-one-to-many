<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'img', 'start_date', 'end_date', 'description', 'project_link','github_link','type_id'];

    public function type(): BelongsTo{
        return $this->belongsTo(Type::class);
    }

}


