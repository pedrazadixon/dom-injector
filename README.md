# CakePHP Application

## make config 

copy ```config/app_local.example.php``` to ```config/app_local.php``` and setup your db credentials

## create db

```bash
bin/cake migrations migrate
```

## serve application

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.
