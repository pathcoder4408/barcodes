<?php

namespace Pathcoder4408\Barcoder;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Pathcoder4408\Barcoder\Commands\BarcoderCommand;

class BarcoderServiceProvider extends PluginServiceProvider
{
    protected array $pages = [
    ];

    protected array $resources = [
    ];

    protected array $widgets = [
    ];

    protected array $styles = [
        //'barcoder-styles' => __DIR__ . '/../dist/app.css',
    ];

    protected array $scripts = [
        //'barcoder-scripts' => __DIR__ . '/../dist/app.js',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('barcoder')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_barcoder_table')
            ->hasCommand(BarcoderCommand::class);
    }
    /*
    public function packageConfiguring(Package $package): void
    {
        Event::listen(ServingFilament::class, [$this, 'registerStuff']);
    }

    protected function registerStuff(ServingFilament $event): void
    {
        // ...
    }
    */
    protected function getScriptData(): array
    {
        return [
            //'someDataKey' => 'someDataValue'
        ];
    }

    protected function getUserMenuItems(): array
    {
        return [
            /*
            UserMenuItem::make()
                ->label('Settings')
                ->url(route('filament.pages.settings'))
                ->icon('heroicon-s-cog'),
            */
        ];
    }
}
