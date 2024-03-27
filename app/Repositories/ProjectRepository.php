<?php

namespace App\Repositories;


use App\Http\Repositories\Repository;
use App\Models\Project;
use App\Repositories\Interfaces\ProjectRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ProjectRepository extends Repository implements ProjectRepositoryInterface
{
    /**
     * @param Project $project
     */
    public function __construct(Project $project)
    {
        $this->setModel($project);
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->getModel()->active()->with('skills')->orderByDesc('created_at')->get();
    }
}
