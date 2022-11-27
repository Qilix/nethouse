<?php

namespace App\Framework\Providers;

use App\News\Repositories\NewsRepository;
use App\News\Repositories\Interfaces\NewsRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            NewsRepositoryInterface::class,
            NewsRepository::class
        );
    }
}
