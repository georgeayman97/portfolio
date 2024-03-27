<?php

namespace App\Repositories;


use App\Http\Repositories\Repository;
use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use App\Repositories\Interfaces\ContactUsRepositoryInterface;

class ContactUsRepository extends Repository implements ContactUsRepositoryInterface
{
    /**
     * @param ContactUs $contactUs
     */
    public function __construct(ContactUs $contactUs)
    {
        $this->setModel($contactUs);
    }

    public function store(ContactUsRequest $request): void
    {
        $this->getModel()->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
    }
}
