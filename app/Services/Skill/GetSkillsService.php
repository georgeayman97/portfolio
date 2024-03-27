<?php

namespace App\Services\Skill;

use App\Repositories\Interfaces\SkillRepositoryInterface;
use Illuminate\Support\Collection;

class GetSkillsService
{
    private Collection $skills;

    /**
     * @param SkillRepositoryInterface $skillRepository
     */
    public function __construct(
        private readonly SkillRepositoryInterface $skillRepository
    ) {
    }

    /**
     * @return self
     */
    function execute(): self
    {
        $this->skills = $this->skillRepository->index();
        return $this;
    }

    /**
     * @return Collection
     */
    public function get(): Collection
    {
        return $this->skills;
    }
}
