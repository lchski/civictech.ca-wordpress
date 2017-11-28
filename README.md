# WordPress

This is a WordPress repository configured to run on the [Pantheon platform](https://pantheon.io).

Pantheon is website platform optimized and configured to run high performance sites with an amazing developer workflow. There is built-in support for features such as Varnish, Redis, Apache Solr, New Relic, Nginx, PHP-FPM, MySQL, PhantomJS and more. 

## Civic Tech Toronto

This section contains information specific to Civic Tech Toronto.

Our experimental development site is hosted at:
https://dev-civictechto.pantheonsite.io

We host the website on Pantheon.

The Panthon dashboard is here:
https://dashboard.pantheon.io/sites/2719de9e-f8ef-44d0-9627-bc83e50bd0e2

You'll need to ask for access to the dashboard. (Check our [Service
Access doc][service-access] to see who can give it to you.)

   [service-access]: https://hackmd.io/s/SJcySi2db#services

### Philosophy

- Keep important site configuration in code, not in the database.
- Capture plugin and theme customizations in version control, as opposed
  to untracked changes on an FTP server.

### File Organization

- Theme customizations are stores in
  [`web/wp-content/themes/custom/zerif-lite-child`][child-theme]
- We are using a custom version of the [Meetup Widgets
  plugin][meetup-widget]. [Changes][meetup-plugin-changes]
- All other themes and plugins are using unmodified versions.
- We use [Composer package manager][about-composer] to help manage Wordpress.
  - `composer.json` specifies roughly what theme/plugin version we want
  - `composer.lock` locks these themes/plugins to specific versions
  - `composer` commands help us rebuild the theme/plugin directories
    according to what we want

   [child-theme]: web/wp-content/themes/custom/zerif-lite-child
   [meetup-widget]: https://wordpress.org/plugins/meetup-widgets/
   [meetup-widget-changes]: https://github.com/ryelle/Meetup-Widgets/compare/master...patcon:civictechto
   [about-composer]: https://roots.io/using-composer-with-wordpress/

## Getting Started

### 1. Spin-up a site

If you do not yet have a Pantheon account, you can create one for free. Once you've verified your email address, you will be able to add sites from your dashboard. Choose "WordPress" to use this distribution.

### 2. Load up the site

When the spin-up process is complete, you will be redirected to the site's dashboard. Click on the link under the site's name to access the Dev environment.

![alt](http://i.imgur.com/2wjCj9j.png?1, '')

### 3. Run the WordPress installer

How about the WordPress database config screen? No need to worry about database connection information as that is taken care of in the background. The only step that you need to complete is the site information and the installation process will be complete.

We will post more information about how this works but we recommend developers take a look at `wp-config.php` to get an understanding.

![alt](http://i.imgur.com/4EOcqYN.png, '')

If you would like to keep a separate set of configuration for local development, you can use a file called `wp-config-local.php`, which is already in our .gitignore file.

### 4. Enjoy!

![alt](http://i.imgur.com/fzIeQBP.png, '')

