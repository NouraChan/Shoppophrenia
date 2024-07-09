<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(IUserRepository::class,UserRepository::class);
        $this->app->singleton(IDepartmentRepository::class,DepartmentRepository::class);
        $this->app->singleton(IVisitRepository::class,VisitRepository::class);
        $this->app->singleton(ISurgeryRepository::class,SurgeryRepository::class);
        $this->app->singleton(IPharmaRepository::class,PharmaRepository::class);
        $this->app->singleton(IPostRepository::class,PostRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
