<?php

namespace DesignPatterns\Singleton;

class Config {
    private static ?Config $instance = null;
    private array $settings = [];

    private function __construct() {}

    public static function getInstance(): Config {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function set(string $key, mixed $value): void {
        $this->settings[$key] = $value;
    }

    public function get(string $key): mixed {
        return $this->settings[$key] ?? null;
    }

    // Prevent cloning of the instance
    private function __clone() {}

    // Prevent unserializing of the instance
    public function __wakeup() {
        throw new \Exception("Cannot unserialize singleton");
    }
}

// Example usage:
// $config = Config::getInstance();
// $config->set('app_name', 'My App');
// echo $config->get('app_name'); 