<?php

namespace App\Providers;

use App\Repositories\ContactUsRepository;
use App\Repositories\Interfaces\ContactUsRepositoryInterface;
use App\Repositories\Interfaces\ProjectRepositoryInterface;
use App\Repositories\Interfaces\SkillRepositoryInterface;
use App\Repositories\ProjectRepository;
use App\Repositories\SkillRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
        $this->app->bind(SkillRepositoryInterface::class, SkillRepository::class);
        $this->app->bind(ContactUsRepositoryInterface::class, ContactUsRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
