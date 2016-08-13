<?php
namespace Garbanzo;

use Slim\App as BaseApp;

class App extends BaseApp {

    private $app;

    public static function create($settings = array()) {
        if ($this->app == null) {
            $this->app = new static($settings);
        }
        return $this->app;
    }

    public function run() {
        throw new Exception('NotImplemented');
    }

    public function addRoutes($routes) {
        throw new Exception('NotImplemented');

    }

    public function addDepencies($dependencies) {
        throw new Exception('NotImplemented');

    }

    public function addMiddleware($middleware) {
        throw new Exception('NotImplemented');

    }

}
