# Laravel Blog

A blog with a public site and an admin panel for managing content. I built it between **December 2016 and January 2017** while following a Laravel tutorial. Laravel was the **first framework I learned**, and this project is where I picked up the basics I later used in my own Laravel projects. I've kept it here as a record of where I started, so it shows the code as it was then. It isn't maintained or production-ready.

## What it does

- Shows a public blog where visitors can read posts, browse them by category and search them.
- Gives each post a readable web address based on its title, using slugs.
- Lets users register and requires them to confirm their email address before they can log in.
- Lets logged-in users comment on posts, reply to other comments and edit their own profile.
- Includes an admin panel for managing users, roles, posts, categories, uploaded photos and comments.
- Shows an admin dashboard with charts of site statistics.

## Technologies used

- **PHP** with **Laravel 5.3**, including Eloquent ORM, Blade templates, migrations, resource controllers, middleware, authentication and mail
- **MySQL** as the database
- **Bootstrap**, **jQuery** and **Sass**, built with **Gulp** and **Laravel Elixir**
- Laravel packages:
  - `laravelcollective/html` for forms
  - `cviebrock/eloquent-sluggable` for slugs
  - `consoletvs/charts` for the dashboard charts
- **Mailgun** for sending activation emails
- **Composer**, **npm** and **Git**

## What I learned

- How a modern PHP framework is organised, with routes, controllers, models, views and middleware.
- How to use Eloquent ORM and relationships between users, posts, categories, photos, comments and replies.
- How to manage database changes with migrations.
- How to use Laravel's built-in login system and extend it with email activation.
- How to protect admin pages with roles and custom middleware.
- How to build an admin panel with full create, read, update and delete (CRUD) features, forms, validation and file uploads.
- How to add third-party packages with Composer and use them in an app.
- How to send emails through an external mail service.
