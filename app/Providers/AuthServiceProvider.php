<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Blog;
use App\Policies\BlogPolicy;

class AuthServiceProvider extends ServiceProvider
{
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
    protected $policies = [
        Blog::class => BlogPolicy::class,
    ];
    public function boot(): void
    {
        $this->register();
    }
}
