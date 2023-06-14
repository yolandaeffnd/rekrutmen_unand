<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a><br>

</p>

# Author

    Yolanda Effendi M.Kom

# References

Panduan Laravel : <a href="https://laravel.com/docs/8.x/">https://laravel.com/docs/8.x/</a>

## Installations

-   git clone https://github.com/yomeihendra/rekrutmen.git
-   create .env from .env.example (SKIP)
-   setup .env DB,etc
-   npm install
-   composer install
-   php artisan key:generate
-   make mysql DB
-   php artisan migrate
-   php artisan db:seed
-   php artisan serve (running)

## Reminder Note

-   list artisan code

        php artisan list

-   generate ulang database seperti baru - Drop all tables and re-run all migrations

        php artisan migrate:fresh

-   generator data by seed

        php artisan db:seed

-   generator data baru in production by seed

        php artisan db:seed --class=GeneratorSeeder

-   generator model dan controller (full resource)
    php artisan make:controller PegawaiController --model=Pegawai

## Artisan Command Code (make:controller)

        Usage:
        make:controller [options] [--] <name>

        Arguments:
        name                   The name of the class

        Options:
            --api              Exclude the create and edit methods from the controller.
            --type=TYPE        Manually specify the controller stub file to use.
            --force            Create the class even if the controller already exists
        -i, --invokable        Generate a single method, invokable controller class.
        -m, --model[=MODEL]    Generate a resource controller for the given model.
        -p, --parent[=PARENT]  Generate a nested resource controller class.
        -r, --resource         Generate a resource controller class.
        -R, --requests         Generate FormRequest classes for store and update.
            --test             Generate an accompanying PHPUnit test for the Controller
            --pest             Generate an accompanying Pest test for the Controller
        -h, --help             Display help for the given command. When no command is given display help for the list command
        -q, --quiet            Do not output any message
        -V, --version          Display this application version
            --ansi|--no-ansi   Force (or disable --no-ansi) ANSI output
        -n, --no-interaction   Do not ask any interactive question
            --env[=ENV]        The environment the command should run under
        -v|vv|vvv, --verbose   Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

## Artisan Command Code (ALL)

        Laravel Framework 8.83.5

        Usage:
        command [options] [arguments]

        Options:
        -h, --help            Display help for the given command. When no command is given
        display help for the list command
        -q, --quiet           Do not output any message
        -V, --version         Display this application version
            --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
        -n, --no-interaction  Do not ask any interactive question
            --env[=ENV]       The environment the command should run under
        -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

        Available commands:
        clear-compiled                Remove the compiled class file
        completion                    Dump the shell completion script
        db                            Start a new database CLI session
        down                          Put the application into maintenance / demo mode
        env                           Display the current framework environment
        help                          Display help for a command
        inspire                       Display an inspiring quote
        list                          List commands
        migrate                       Run the database migrations
        optimize                      Cache the framework bootstrap files
        serve                         Serve the application on the PHP development server
        test                          Run the application tests
        tinker                        Interact with your application
        ui                            Swap the front-end scaffolding for the application
        up                            Bring the application out of maintenance mode
        auth
        auth:clear-resets             Flush expired password reset tokens
        cache
        cache:clear                   Flush the application cache
        cache:forget                  Remove an item from the cache
        cache:table                   Create a migration for the cache database table
        config
        config:cache                  Create a cache file for faster configuration loading
        config:clear                  Remove the configuration cache file
        db
        db:seed                       Seed the database with records
        db:wipe                       Drop all tables, views, and types
        event
        event:cache                   Discover and cache the application's events and listeners
        event:clear                   Clear all cached events and listeners
        event:generate                Generate the missing events and listeners based on registration
        event:list                    List the application's events and listeners
        key
        key:generate                  Set the application key
        make
        make:cast                     Create a new custom Eloquent cast class
        make:channel                  Create a new channel class
        make:command                  Create a new Artisan command
        make:component                Create a new view component class
        make:controller               Create a new controller class
        make:event                    Create a new event class
        make:exception                Create a new custom exception class
        make:factory                  Create a new model factory
        make:job                      Create a new job class
        make:listener                 Create a new event listener class
        make:mail                     Create a new email class
        make:middleware               Create a new middleware class
        make:migration                Create a new migration file
        make:model                    Create a new Eloquent model class
        make:notification             Create a new notification class
        make:observer                 Create a new observer class
        make:policy                   Create a new policy class
        make:provider                 Create a new service provider class
        make:request                  Create a new form request class
        make:resource                 Create a new resource
        make:rule                     Create a new validation rule
        make:seeder                   Create a new seeder class
        make:test                     Create a new test class
        migrate
        migrate:fresh                 Drop all tables and re-run all migrations
        migrate:install               Create the migration repository
        migrate:refresh               Reset and re-run all migrations
        migrate:reset                 Rollback all database migrations
        migrate:rollback              Rollback the last database migration
        migrate:status                Show the status of each migration
        model
        model:prune                   Prune models that are no longer needed
        notifications
        notifications:table           Create a migration for the notifications table
        optimize
        optimize:clear                Remove the cached bootstrap files
        package
        package:discover              Rebuild the cached package manifest
        permission
        permission:cache-reset        Reset the permission cache
        permission:create-permission  Create a permission
        permission:create-role        Create a role
        permission:setup-teams        Setup the teams feature by generating the associated
        migration.
        permission:show               Show a table of roles and permissions per guard
        queue
        queue:batches-table           Create a migration for the batches database table
        queue:clear                   Delete all of the jobs from the specified queue
        queue:failed                  List all of the failed queue jobs
        queue:failed-table            Create a migration for the failed queue jobs database table
        queue:flush                   Flush all of the failed queue jobs
        queue:forget                  Delete a failed queue job
        queue:listen                  Listen to a given queue
        queue:monitor                 Monitor the size of the specified queues
        queue:prune-batches           Prune stale entries from the batches database
        queue:prune-failed            Prune stale entries from the failed jobs table
        queue:restart                 Restart queue worker daemons after their current job
        queue:retry                   Retry a failed queue job
        queue:retry-batch             Retry the failed jobs for a batch
        queue:table                   Create a migration for the queue jobs database table
        queue:work                    Start processing jobs on the queue as a daemon
        route
        route:cache                   Create a route cache file for faster route registration
        route:clear                   Remove the route cache file
        route:list                    List all registered routes
        sail
        sail:install                  Install Laravel Sail's default Docker Compose file
        sail:publish                  Publish the Laravel Sail Docker files
        schedule
        schedule:clear-cache          Delete the cached mutex files created by scheduler
        schedule:list                 List the scheduled commands
        schedule:run                  Run the scheduled commands
        schedule:test                 Run a scheduled command
        schedule:work                 Start the schedule worker
        schema
        schema:dump                   Dump the given database schema
        session
        session:table                 Create a migration for the session database table
        storage
        storage:link                  Create the symbolic links configured for the application
        stub
        stub:publish                  Publish all stubs that are available for customization
        ui
        ui:auth                       Scaffold basic login and registration views and routes
        ui:controllers                Scaffold the authentication controllers
        vendor
        vendor:publish                Publish any publishable assets from vendor packages
        view
        view:cache                    Compile all of the application's Blade templates
        view:clear                    Clear all compiled view files
