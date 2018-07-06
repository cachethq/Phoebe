<?php

namespace CachetHQ\Theme\Official;

use CachetHQ\Cachet\Theme\ThemeWasCalled;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;

/**
 * This is the theme provider class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ThemeProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @param \Illuminate\Contracts\Events\Dispatcher $events
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(ThemeWasCalled::class, function ($theme) {
            $theme->loadTheme(
                json_decode(file_get_contents(__DIR__.'/theme.json'), true),
                __DIR__.'/resources'
            );
        });
    }
}
