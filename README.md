# HogwartsAdmin

Manage Owls for Hogwarts.

## Installing

This is a Laravel based app. Follow the steps below to get up and running quickly. If you are in Windows, make sure to
run all commands from inside WSL to ensure that Docker and Sail don't randomly break things.

### 1. Clone GitHub repo for this project locally
Run from inside WSL.

```shell script
$ git clone project-git-url
```

### 2. cd into your project
You will need to be inside that project file to enter all of the rest of the commands in this tutorial. So remember to
type `cd project-name` to move your terminal working location to the project file we just barely created. (Of course
substitute “project-name” in the command above, with the name of the folder you created in the previous step).

### 3. Install Composer Dependencies
Run from inside WSL.

```shell script
$ docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

### 4. Create a copy of your .env file
Run from inside WSL.

```shell script
$ cp .env.example .env
```

### 5. Start app
Run from inside WSL.

``` shell script
$ ./vendor/bin/sail up -d
```

### 6. Create APP_KEY
Run from inside WSL

``` shell script
$ ./vendor/bin/sail php artisan key:generate
```

### 7. Migrate and seed the database
Run from inside WSL

``` shell script
$ ./vendor/bin/sail php artisan migrate --seed
```

### 8. Open application in browser

In your favorite browser, browse to `http://localhost`

## Reacquiring acquintance with Laravel

Before you start the task below, there is a small bug that needs fixing: the O.W.L.s page shows all O.W.L.s in
ascending order; from earliest date to latest date. This needs to be changed to descending order: from latest date to
earliest date. You don't need to commit or push anything. Just make the required change and let the researcher know
when you are done. Now is a good time to start verbalizing your thought processes.

## Task

Your task is to show the average grade for an O.W.L. according to the Model-View-Controller design pattern.

You have a maximum of 20 minutes to spend on the task. It is okay if you cannot finish. You are not graded and your work
will only be used to gather data for research. Remember to verbalize your thought processes so that the researcher can
do his research ;-)

## Authors

* **Daan de Waard** - *Initial work* - [dwaard](https://github.com/dwaard)
* **Loek van der Linde** - *Adapted to master thesis research* - [Lucky-Loek](https://github.com/Lucky-Loek)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
