<?php

namespace App\Services\ContactUs;

use App\Http\Requests\ContactUsRequest;
use App\Repositories\Interfaces\ContactUsRepositoryInterface;

class StoreContactUsService
{
    private ContactUsRequest $request;

    /**
     * @param ContactUsRepositoryInterface $contactUsRepository
     */
    public function __construct(
        private readonly ContactUsRepositoryInterface $contactUsRepository
    ) {
    }

    /**
     * @return void
     */
    function execute(): void
    {
        $this->contactUsRepository->store($this->request);
    }

    /**
     * @param ContactUsRequest $request
     * @return StoreContactUsService
     */
    public function setRequest(ContactUsRequest $request): self
    {
        $this->request = $request;
        return $this;
    }


}
