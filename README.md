# laravel-ecommerce-site
This ecommerce store was built with php laravel framework


this is how we change a regular user to admin user

$ php artisan tinker
>>> use App\User;
>>>User::where('email', 'admin@admin.com')->update(['type' => 'admin']);

run these commands

php artisan migrate  

php artisan storage:link  
