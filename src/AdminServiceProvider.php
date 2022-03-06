<?php

namespace Monet\Framework\Admin;

use Monet\Framework\Support\Services\Package;
use Monet\Framework\Support\Services\ServiceProvider;

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
}