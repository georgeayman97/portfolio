<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface SkillRepositoryInterface
{
    public function index(): Collection;

}
