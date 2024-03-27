<?php

namespace App\Http\Controllers;

use App\Services\Project\GetProjectsService;
use App\Services\Skill\GetSkillsService;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function __construct(
        private readonly GetProjectsService $projectsService,
        private readonly GetSkillsService $skillsService,
    ) {
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $projectsService = $this->projectsService->execute();
        $skillsService = $this->skillsService->execute();

        return view('home', [
            'projects' => $projectsService->get(),
            'skills' => $skillsService->get(),
        ]);
    }
}
