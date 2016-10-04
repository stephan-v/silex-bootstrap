# silex-bootstrap


### PHP ecosystem installation

```
composer update
```

```
rename .env.example to .env
```

### NPM ecosystem installation

Make sure you have npm installed.

Install gulp globally

```
npm install --global gulp-cli
```

Install the local npm modules

```
npm install
```

Run gulp with webpack

```
gulp
```

Or let gulp watch for changes

```
gulp watch
```

### Deployment

```
composer dump-autoload --optimize
```

to remove the classmap simply:

```
composer update
```
