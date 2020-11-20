<?php

namespace Jxlwqq\Screenfull;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Widgets\Navbar;
use Illuminate\Support\ServiceProvider;

class ScreenfullServiceProvider extends ServiceProvider
{
    public function boot(Screenfull $extension)
    {
        if (!Screenfull::boot()) {
            return;
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/screenfull')],
                'laravel-admin-screenfull'
            );
        }

        Admin::booting(function () {
            Admin::js('vendor/laravel-admin-ext/screenfull/screenfull.min.js');
            Admin::script($this->script());
            Admin::navbar(function (Navbar $navbar) {
                $navbar->right('<li><a id="screenfull-toggle"><i class="fa fa-arrows-alt"></i></a></li>');
            });
        });
    }

    private function script()
    {
        return <<<JS
$("#screenfull-toggle").click(function () {
    if (screenfull.isEnabled) {
        screenfull.toggle($("body")[0])
    }
});
JS;
    }
}
