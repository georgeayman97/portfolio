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

class Project extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    use HasUuids;

    protected $fillable = ['title', 'description', 'year', 'status'];

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
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'project_skills', 'project_id', 'skill_id');
    }
}
