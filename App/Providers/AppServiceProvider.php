<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\EntrepriseRepositoryInterface;
use App\Repositories\EntrepriseRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EntrepriseRepositoryInterface::class, EntrepriseRepository::class);
    }
    

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (env('APP_ENV') != 'local') {
            URL::forceScheme('https');
        } 
    }
}
