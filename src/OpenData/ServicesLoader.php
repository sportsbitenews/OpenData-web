<?php

namespace OpenData;

use Silex\Application;

class ServicesLoader {

    public $app;

    public function __construct(Application $app) {

        $this->app = $app;
    }

    public function bindServicesIntoContainer() {

        $loader = $this;
        $this->app['crashes.service'] = $this->app->share(function () use ($loader) {
            return new Services\CrashesService($loader->app["mongo"]);
        });
        $this->app['files.service'] = $this->app->share(function () use ($loader) {
            return new Services\FilesService($loader->app["mongo"]);
        });
        $this->app['analytics.service'] = $this->app->share(function () use ($loader) {
            return new Services\AnalyticsService($loader->app["mongo"]);
        });
    }

}
