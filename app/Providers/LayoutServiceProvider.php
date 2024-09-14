<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class LayoutServiceProvider extends ServiceProvider
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
    public function boot(): void
    {
        $isUserAuthenticated = Auth::check();
        $initials            = '';
        $user                = null;
        
        if ($isUserAuthenticated) {
            /** @var User $user */
            $user     = Auth::user();
            $initials = mb_substr($user->first_name, 0, 1) . mb_substr($user->last_name, 0, 1);
        }

        View::share('isUserAuthenticated', $isUserAuthenticated);
        View::share('initials', $initials);
        View::share('user', $user);
    }
}
