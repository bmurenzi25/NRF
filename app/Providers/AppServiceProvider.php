<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
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
        $welcome_paragraph = Setting::where('name','welcome paragraph')->pluck('value');
        $about_paragraph = Setting::where('name','about us paragraph')->pluck('value');
        $objective_paragraph = Setting::where('name','objective paragraph')->pluck('value');
        $address = Setting::where('name','address')->pluck('value');
        $email = Setting::where('name','email')->pluck('value');
        $phone = Setting::where('name','phone number')->pluck('value');

        view()->share([
            'welcome' => $welcome_paragraph,
            'about' => $about_paragraph,
            'objective' => $objective_paragraph,
            'address' => $address,
            'email' => $email,
            'phone' => $phone,
        ]);
        
        Schema::defaultStringLength(191);
    }
}
