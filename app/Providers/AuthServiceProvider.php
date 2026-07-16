<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Job;
use App\Policies\JobPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // Connect Job Model to Job Policy
        Job::class => JobPolicy::class
    ];
    /**
     * Register services.
     */
    public function register(): void
    {

        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Register Job Policy to Job Model
        $this->registerPolicies();
        
    }
}
