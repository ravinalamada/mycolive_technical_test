# MYCOliveTestTrivia

## Welcome!

**Dear Applicant,**

We warmly welcome you on behalf of the MYCOlive development team.

This is the welcome page of your `HomeWork`, this is a Laravel + MYSQL project, which have been dockerize inside a container together with MYSQL database.

> 💡 If you are unfamiliar with Docker, might worth check this [few minutes intro](https://www.youtube.com/watch?v=Gjnup-PuquQ&ab_channel=Fireship) > <br /> > <br /> > <br /> > <br />

# Prerequisites

You will need to have Docker and Git to be installed on your computer

# Your Task

We would like you to demonstrate your development skills and shine while creating a `Multiple choice Trivia Game` application.

You can use the following trivia questions as your question seed: https://opentdb.com/api.php?amount=10&category=9&difficulty=easy&type=multiple&encode=url3986

> 💡 You can also generate new topics using the Trivia API: https://opentdb.com/api_config.php.
> Please select your type to be `Multiple Choice`

## Fork the repo

Please fork this repo to your private GitHub user, so that you can commit to your own repo directly.

You can make your forked repo public. Anyway you'll benefit from having a new pet-project under your own github profile.

We expect you to send a `pull request`, merging back your forked repository to our original repository after completing your tasks defined below.

## Let's get started

After forking / cloning your repo, `cd` into folder directory & run `docker compose up -d`.

Congratulation, your app is now running on `localhost:2222`. We also just set up our own mysql database that is running on `127.0.0.1:1111`.

In the database, we already create a `users` table.

If you go try to `localhost:2222`. We put a middleware to protect the route from an unauthenticated users. Hence you will be redirected to `localhost:2222/login`

## Do the chore

### Handle users registration

Go to `localhost:2222/register`, the signup page already set up for you. The view page can be find in `resources/view/register.blade.php`.

The controller for this can be found in `app/Http/Controllers/AuthController@register`.

What you need to do:

1. Send the user input to the backend, you can register new path or controller in `web.php` as long as the controller able to verify and validate the input.
2. Validate the input. The input should be validate with the following contraint:

    - username is required, unique, maximum length of 30 and minimum length of 6
    - password is required, maximum length of 30 and minimum length of 6
    - password-confirmation is required, and must be the same as password

3. You should show appropriate error message if any of the contraints got violated.
4. Else, save the user credentials in the database. The schema of users table can be found in `database/migrations/2014_10_12_000000_create_users_table.php`.
    > Worth noting that the user's password should be stored as a hashed instead of raw password.
5. After that, the user need to be redirected to `/login`.

### Handle users login

Go to `localhost:2222/login`, the login page already set up for you. The view page can be find in `resources/view/login.blade.php`.

The controller for this can be found in `app/Http/Controllers/AuthController@login`.

1. Send the user input to the backend, you can register new path or controller in `web.php` as long as the controller able to verify and validate the input.
2. Validate the input. The input should be validate with the following contraint:

    - username is required, maximum length of 30 and minimum length of 6
    - password is required, maximum length of 30 and minimum length of 6

3. You should show appropriate error message if any of the contraints got violated.
4. If no users found with the given credentials, throw an error.
5. Else, login the users and redirect the user to `/`.

### Let's spice things up 🔥
