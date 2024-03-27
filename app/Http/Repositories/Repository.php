<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;

class Repository
{
    private ?Model $model = null;

    /**
     * @return Model|null
     */
    public function getModel(): ?Model
    {
        return $this->model;
    }

    /**
     * @param Model $model
     */
    public function setModel(Model $model): void
    {
        $this->model = $model;
    }

}

