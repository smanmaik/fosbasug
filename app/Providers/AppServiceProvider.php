<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        $this->app->singleton(Filesystem::class, function () {
            return new Filesystem();
        });
    
        $this->app->singleton(Finder::class, function () {
            return new Finder();
        });
    
        $this->app->singleton(Request::class, function ($app) {
            return Request::createFromGlobals();
        });
    
        $this->app->singleton(Response::class, function () {
            return new Response();
        });
    
        $this->app->singleton(HttpKernelInterface::class, function ($app) {
            return $app->make(\Illuminate\Contracts\Http\Kernel::class);
        });
    }
}