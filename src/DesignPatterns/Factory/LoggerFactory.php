<?php

namespace DesignPatterns\Factory;

interface Logger {
    public function log(string $message): void;
}

class ConsoleLogger implements Logger {
    public function log(string $message): void {
        echo "Console: " . $message . PHP_EOL;
    }
}

class FileLogger implements Logger {
    public function log(string $message): void {
        echo "File: " . $message . PHP_EOL;
    }
}

class LoggerFactory {
    public static function createLogger(string $type): Logger {
        return match($type) {
            'console' => new ConsoleLogger(),
            'file' => new FileLogger(),
            default => throw new \InvalidArgumentException("Unknown logger type: $type")
        };
    }
}

// Example usage:
// $logger = LoggerFactory::createLogger('console');
// $logger->log('Hello World'); 