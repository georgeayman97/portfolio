<?php

namespace App\Models;

use App\Enum\ActivationType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Skill extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    use HasUuids;

    protected $fillable = ['name', 'proficiency_level', 'status'];

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', ActivationType::ACTIVE->value);
    }
    
    /**
     * @return BelongsToMany
     */
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_skills', 'skill_id', 'project_id');
    }

}
