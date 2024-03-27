<?php

namespace App\Services\Project;

use App\Repositories\Interfaces\ProjectRepositoryInterface;
use Illuminate\Support\Collection;

class GetProjectsService
{
    private Collection $projects;

    /**
     * @param ProjectRepositoryInterface $projectRepository
     */
    public function __construct(
        private readonly ProjectRepositoryInterface $projectRepository
    ) {
    }

    /**
     * @return self
     */
    function execute(): self
    {
        $this->projects = $this->projectRepository->index();
        return $this;
    }

    /**
     * @return Collection
     */
    public function get(): Collection
    {
        return $this->projects;
    }
}
