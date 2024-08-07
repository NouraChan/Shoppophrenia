<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\AnnouncementRepository;
use App\Repository\CartRepository;
use App\Repository\WishlistRepository;
use App\Repository\UserRepository;
use App\Repository\ProductRepository;
use App\Repository\OrderRepository;
use App\Repository\ItemsRepository;
use App\Repository\GenreRepository;
use App\Repository\Interface\IAnnouncementRepository;
use App\Repository\Interface\ICartRepository;
use App\Repository\Interface\IWishlistRepository;
use App\Repository\Interface\IUserRepository;
use App\Repository\Interface\IProductRepository;
use App\Repository\Interface\IOrderRepository;
use App\Repository\Interface\IItemsRepository;
use App\Repository\Interface\IGenreRepository;
use App\Repository\ReviewRepository;
use App\Repository\Interface\IReviewRepository;
use App\Repository\Interface\IQueryRepository;
use App\Repository\QueryRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
        
        $this->app->singleton(IUserRepository::class,UserRepository::class);
        $this->app->singleton(IGenreRepository::class,GenreRepository::class);
        $this->app->singleton(IOrderRepository::class,OrderRepository::class);
        $this->app->singleton(IProductRepository::class,ProductRepository::class);
        $this->app->singleton(ICartRepository::class,CartRepository::class);
        $this->app->singleton(IAnnouncementRepository::class,AnnouncementRepository::class);
        $this->app->singleton(IWishlistRepository::class,WishlistRepository::class);
        $this->app->singleton(IReviewRepository::class,ReviewRepository::class);
        $this->app->singleton(IQueryRepository::class,QueryRepository::class);




    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
