<?php

use Illuminate\Foundation\Application;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Route;

/*
 * Stamp public assets with their last modified time.
 *
 * Everything under public is served straight from disk, so unlike the Vite
 * build it carries no content hash and a CDN will happily hold on to a
 * replaced image. The mtime moves it along.
 */
UrlGenerator::macro('version', function (string $path): string {
    $file = public_path($path);

    return is_file($file)
        ? $path.'?v='.filemtime($file)
        : $path;
});

/*
 * Routes load without the web middleware group on purpose. A site that
 * exports to static HTML has no sessions, cookies or CSRF tokens to
 * carry, and skipping them keeps the database out of a render.
 */
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(using: fn () => Route::group([], base_path('routes/web.php')))
    ->withExceptions()
    ->create();
