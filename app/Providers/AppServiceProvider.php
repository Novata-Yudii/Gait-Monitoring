<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Gate::define('acces_author', function(User $user){
            return $user->role === 'author';
        });
        Gate::define('acces_admin', function(User $user){
            return $user->role === 'admin';
        });
        Gate::define('acces_doctor', function(User $user){
            return $user->role === 'doctor';
        });

    }
}
