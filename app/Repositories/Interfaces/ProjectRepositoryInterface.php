<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface ProjectRepositoryInterface
{
    public function index(): Collection;

}
