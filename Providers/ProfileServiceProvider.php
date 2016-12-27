<?php

namespace Gkiokan\Profile\Providers;

use \Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class ProfileServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();

        $router->middleware('IsMyOwnProfile', \Gkiokan\Profile\Http\Middleware\IsOwnProfile::class);

        // app()->singleton('profile.callme', '\Gkiokan\Profile\Helpers\CallMe');
        $this->app->singleton('profile.callme', '\Gkiokan\Profile\Helpers\CallMe');
        $this->app->singleton('profile.magic', '\Gkiokan\Profile\Profile');

        include_once __DIR__ .'/../start.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
        $loader = AliasLoader::getInstance();
        $loader->alias('Magic', '\Gkiokan\Profile\Helpers\CallMe');
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('profile.php'),
        ]);
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'profile'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = base_path('resources/views/modules/profile');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ]);

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/profile';
        }, \Config::get('view.paths')), [$sourcePath]), 'profile');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = base_path('resources/lang/modules/profile');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'profile');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'profile');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
