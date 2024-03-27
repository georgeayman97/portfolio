<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Services\ContactUs\StoreContactUsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

class ContactUsController extends Controller
{
    /**
     * @param StoreContactUsService $contactUsService
     */
    public function __construct(
        private readonly StoreContactUsService $contactUsService,
    ) {
    }

    /**
     * @param ContactUsRequest $request
     * @return RedirectResponse
     */
    public function store(ContactUsRequest $request): RedirectResponse
    {
        $this->contactUsService->setRequest($request)->execute();

        return redirect()->route('home')->with(['success' => true]);
    }

}
