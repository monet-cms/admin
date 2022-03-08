<?php

namespace Monet\Framework\Admin;

use Livewire\Livewire;
use Monet\Framework\Admin\Http\Livewire\Tiles\DummyTile;
use Monet\Framework\Support\Services\Package;
use Monet\Framework\Support\Services\ServiceProvider;
use Spatie\Menu\Laravel\Facades\Menu;

class AdminServiceProvider extends ServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('monet.admin')
            ->hasRoute('web')
            ->hasViews()
            ->hasAssets();
    }

    protected function packageBooted(): void
    {
        $this->app->singleton('admin-menu', function() {
            return Menu::new();
        });

        $this->registerLivewireComponents();
    }

    protected function registerLivewireComponents(): void
    {
        Livewire::component('monet.admin::dummy-tile', DummyTile::class);
    }
}