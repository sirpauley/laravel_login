# laravel_login

## Login with laravel playground
1. create laravel new APP
2. cd APP
3. composer install
4. Configure database setting in .env
5. php artisan make:migration create_users_table --create=users
6. setup table coloms in migration folder
7. php artisan migrate
8. Create a seed and add code below; php artisan make:seeder UserTableSeeder

''' php

class UserTableSeeder extends Seeder
{

public function run()
{
  DB::table('users')->insert([
    'name'      => 'Admin',
    'username'  => 'admin',
    'email'     => 'admin@webmaster.com',
    'password'  => Hash::make('admin'),
  ]);
}

}
'''

9. Add line to DatabaseSeeder in the run function

'''
// app/database/seeds/DatabaseSeeder.php
$this->call('UserTableSeeder');
'''

10. php artisan db:seed

11. php artisan make:controller HomeController

```php
public function showLogin()
{
    // show the form
    return View::make('login');
}
```

```php
public function doLogin()
{
// process the form
}
```

12. create login.blade.php (form)

13. validate form

14. logout

```HTML
<!-- LOGOUT BUTTON -->
<a href="{{ URL::to('logout') }}">Logout</a>
```

15. Middleware for logged in test
