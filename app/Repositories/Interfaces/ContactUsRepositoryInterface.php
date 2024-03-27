<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\ContactUsRequest;

interface ContactUsRepositoryInterface
{
    public function store(ContactUsRequest $request): void;

}
