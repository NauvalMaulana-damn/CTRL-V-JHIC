<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Marquee;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        SymfonyRequest::setTrustedProxies(
            ['*'], // atau array IP proxy yang kamu percaya
            SymfonyRequest::HEADER_X_FORWARDED_FOR |
                                SymfonyRequest::HEADER_X_FORWARDED_HOST |
                                SymfonyRequest::HEADER_X_FORWARDED_PROTO |
                                SymfonyRequest::HEADER_X_FORWARDED_PORT
        );

        // ✅ Force HTTPS in production
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        // ✅ Share marquee data to all views
        View::composer('*', function ($view) {
            try {
                $marquees = Marquee::query()
                    ->orderBy('urutan')
                    ->orderBy('nama')
                    ->get();
                $view->with('marquees', $marquees);
            } catch (\Exception) {
                $view->with('marquees', collect());
            }

            // ✅ Share image path helper
            $view->with('getImagePath', function ($image, $default = 'default.svg') {
                if ($image && $image !== 'default.svg') {
                    if (Storage::disk('public')->exists($image)) {
                        return asset("storage/{$image}");
                    }
                    if (file_exists(public_path("assets/{$image}"))) {
                        return asset("assets/{$image}");
                    }
                    if (file_exists(public_path($image))) {
                        return asset($image);
                    }
                }
                return asset("images/{$default}");
            });
        });
    }
}
