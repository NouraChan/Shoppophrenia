<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\AnnouncementRepository;
use App\Repository\CartRepository;
use App\Repository\WishlistsRepository;
use App\Repository\UserRepository;
use App\Repository\ProductRepository;
use App\Repository\ShipmentRepository;
use App\Repository\PaymentRepository;
use App\Repository\OrdersRepository;
use App\Repository\ItemsRepository;
use App\Repository\GenreRepository;
use App\Repository\Interface\IAnnouncementRepository;
use App\Repository\Interface\ICartRepository;
use App\Repository\Interface\IWishlistsRepository;
use App\Repository\Interface\IUserRepository;
use App\Repository\Interface\IProductRepository;
use App\Repository\Interface\IShipmentRepository;
use App\Repository\Interface\IPaymentRepository;
use App\Repository\Interface\IOrdersRepository;
use App\Repository\Interface\IItemsRepository;
use App\Repository\Interface\IGenreRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(IUserRepository::class,UserRepository::class);
        $this->app->singleton(IGenreRepository::class,GenreRepository::class);
        $this->app->singleton(IOrdersRepository::class,OrdersRepository::class);
        $this->app->singleton(IProductRepository::class,ProductRepository::class);
        $this->app->singleton(ICartRepository::class,CartRepository::class);
        $this->app->singleton(IAnnouncementRepository::class,AnnouncementRepository::class);
        $this->app->singleton(IPaymentRepository::class,PaymentRepository::class);
        $this->app->singleton(IShipmentRepository::class,ShipmentRepository::class);
        $this->app->singleton(IItemsRepository::class,ItemsRepository::class);
        $this->app->singleton(IWishlistsRepository::class,WishlistsRepository::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
