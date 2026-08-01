<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->versionPublicAssets();
    }

    /**
     * Stamp public assets with their last modified time.
     *
     * Everything under public is served straight from disk, so unlike the
     * Vite build it carries no content hash and a CDN will happily
     * hold on to a replaced image. The mtime moves it along.
     */
    protected function versionPublicAssets(): void
    {
        UrlGenerator::macro('version', function (string $path): string {
            $file = public_path($path);

            return is_file($file)
                ? $path.'?v='.filemtime($file)
                : $path;
        });
    }
}
