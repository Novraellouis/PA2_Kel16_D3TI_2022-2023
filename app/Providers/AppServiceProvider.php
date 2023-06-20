<?php

namespace App\Providers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('theme.admin.header', function ($view) {
            $notif = Notification::orderBy('id','desc')->get();
            // $notifUser = User::where('id','>', 2)->get();

            // $allNotif = $notif->concat($notifUser);
            $view->with('notif', $notif);
        });
    }
}
