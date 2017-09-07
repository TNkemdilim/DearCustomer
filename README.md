# DearCustomer

DearCustomer is a platform that simplifies the process to easily mail customers in business.


## Sample shortcut code
```HTML

<form action="https://www.dearcustomer.com/user/<id>/subscribe">
  <input type="email" name="email" placeholder="Sign up to our newsletter">
  <button type="submit">Subscribe</button>
</form>

```

# Setting Up

## Dev Setup
* Install Composer and Laravel (Laravel Docs)
* Clone project: `git clone [project-git-url]`
* Install dependencies: `composer install`
* Create your `.env` file and use `.env.example` to configure the settings
* Generate your `APP KEY`: `php artsan key:generate`
* Run migrations to create the tables in the database: `php artisan migrate --seed`
* Run dev server: `php artisan serve`

## Login [for development]
* Customer with email: `test@gmail.com` and password: `password`

## Todo
* Move assets to `Resources/assets` and compile assets using `mix`