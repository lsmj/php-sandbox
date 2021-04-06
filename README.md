# PHP Sandbox

A fast and easy way to preview PHP locally in your browser with hot reloading. This requires a local PHP installation, Composer to install the [lsmj/phrint](https://github.com/lsmj/phrint) previewing package, and NodeJS with Yarn or NPM to install hot reloading with [browser-sync](https://www.browsersync.io).

## Installation
```bash
composer install
yarn
```

## Start browsersync
```bash
yarn sync
```

## Serve with Valet
http://php-sandbox.test/

## Serve with default php server
```bash
php -S localhost:8080
```
http://localhost:8080