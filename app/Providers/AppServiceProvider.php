<?php

namespace App\Providers;

use App\Models\Support;
use App\Models\User;
use App\Observers\SupportObserver;
use App\Repositories\ConsultancyEloquentORM;
use App\Repositories\Contracts\ConsultancyRepositoryInterface;
use App\Repositories\Contracts\ReplyRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Contracts\VehicleRepositoryInterface; 
use App\Repositories\SupportEloquentORM;
use App\Repositories\Contracts\SupportRepositoryInterface;
use App\Repositories\Eloquent\ReplySupportRepository;
use App\Repositories\UserEloquentORM;
use App\Repositories\VehicleEloquentORM; 
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            UserEloquentORM::class
        );

        $this->app->bind(
            SupportRepositoryInterface::class,
            SupportEloquentORM::class
        );
        $this->app->bind(
            ReplyRepositoryInterface::class,
            ReplySupportRepository::class
        );
        $this->app->bind(
            ConsultancyRepositoryInterface::class,
            ConsultancyEloquentORM::class
        );

        $this->app->bind(
            VehicleRepositoryInterface::class,
            VehicleEloquentORM::class
        );
   
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Support::observe(SupportObserver::class);
    }
}
