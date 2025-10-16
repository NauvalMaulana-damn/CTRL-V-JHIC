<?php
// app/Providers/AppServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Marquee;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share marquee data to all views
        View::composer('*', function ($view) {
            $marquees = Marquee::active()->ordered()->get();
            $view->with('marquees', $marquees);
        });

        // Share getImagePath function to all views
        View::composer('*', function ($view) {
            $view->with('getImagePath', function ($image, $default = 'default.svg') {
                if ($image && $image !== 'default.svg') {
                    // Cek di storage public
                    if (\Illuminate\Support\Facades\Storage::disk('public')->exists($image)) {
                        return asset('storage/' . $image);
                    }
                    // Cek di assets
                    if (file_exists(public_path('assets/' . $image))) {
                        return asset('assets/' . $image);
                    }
                    // Cek di root public
                    if (file_exists(public_path($image))) {
                        return asset($image);
                    }
                }
                return asset('images/' . $default);
            });
        });
    }
}
