# PHP Sandbox

A fast and easy way to preview PHP locally in your browser with hot reloading. This requires a local PHP installation, Composer to install the [lsmj/phrint](https://github.com/lsmj/phrint) previewing package, and NodeJS with Yarn or NPM to install hot reloading with [browser-sync](https://www.browsersync.io).

## Installation
```bash
git clone https://github.com/lsmj/php-sandbox .
composer install
yarn install # or npm install
```

## Starting browsersync
Linux/Mac:
```bash
bash ./src/sync.sh
```
Windows:
```powershell
./src/sync.ps1
```

## Starting the PHP server
Linux/Mac:
```bash
bash ./src/serve.sh
```
Windows:
```powershell
./src/serve.ps1
```
