# Project NISEI Site
The Project NISEI site has been built in [Laravel](https://laravel.com/) 5.5 and the core project code was generated using [QuickAdminPanel](https://quickadminpanel.com/).

To set the site up in a dev environment you will need a full LAMP stack set up, if you don't already have this available I'd recommend using [Scotch Box](https://box.scotch.io/), a Vagrant box which should come with everything you need already installed (although any other setup should work fine as long as you can run Laravel). Scotch Box comes with it's own set up instructions to get everything in place (VirtualBox, Vagrant, Scotch itself).

Once you have your stack set up you can clone this project into the public directory of your server and follow standard Laravel set up procedure to get up and running:
* Set up .env (as a copy of .env.example) with your local environment details, including database logins that are included in the Scotch Box docs
* run `php artisan key:generate`
* run `composer install`
* run `npm install`

Once everything is up and running, pull requests can be made to the main repo (on a feature branch) and deployed to live once reviewed.