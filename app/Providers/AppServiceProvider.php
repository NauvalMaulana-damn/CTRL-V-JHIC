<?php
// app/Providers/AppServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Marquee;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        // Share marquee data to all views - dengan error handling
        View::composer('*', function ($view) {
            try {
                $marquees = Marquee::orderBy('urutan')
                                ->orderBy('nama')
                                ->get();
                $view->with('marquees', $marquees);
            } catch (\Exception $e) {
                // Jika ada error, kirim collection kosong
                $view->with('marquees', collect());
            }
        });

        // Share getImagePath function to all views
        View::composer('*', function ($view) {
            $view->with('getImagePath', function ($image, $default = 'default.svg') {
                if ($image && $image !== 'default.svg') {
                    if (\Illuminate\Support\Facades\Storage::disk('public')->exists($image)) {
                        return asset('storage/' . $image);
                    }
                    if (file_exists(public_path('assets/' . $image))) {
                        return asset('assets/' . $image);
                    }
                    if (file_exists(public_path($image))) {
                        return asset($image);
                    }
                }
                return asset('images/' . $default);
            });
        });
    }
}
