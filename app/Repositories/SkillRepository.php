<?php

namespace App\Repositories;


use App\Http\Repositories\Repository;
use App\Models\Skill;
use App\Repositories\Interfaces\SkillRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class SkillRepository extends Repository implements SkillRepositoryInterface
{
    /**
     * @param Skill $skill
     */
    public function __construct(Skill $skill)
    {
        $this->setModel($skill);
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->getModel()->active()->orderByDesc('created_at')->get();
    }
}
