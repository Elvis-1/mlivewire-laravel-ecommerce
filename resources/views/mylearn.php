 <?php
 /* Steps 
 1. start the project
 2. add install livewire -- composer require livewire/livewire
 3. Add add livewireStyles and livewireScripts to the base or app layout
 4 add homecomponent -- php artisan make:livewire HomeComponent.
 5. Attach base layout to the HomeComponent
 6. Add the HomeComponent to your route file(web.php)
 7. add content to your home-component view in livewire
 8. connect your images using asset

 9. Creat ShopComponent,CartComponent and CheckoutComponent thesame way

 /// ADDING ADMIN AND USER AUTHENTICATION
 1. Add jetstream composer require laravel/jetstream
 2. Install jetsteam livewire package 'php artisan jetstream:install livewire'
 3. create middleware for admin, also create user and admin dashboard routes.
 4. configure and register the middleware, then register it in kernel.php
 5. Go to RouteServiceProvider and redirect user to your registered route
 6) go to  Laravel\Fortify\Actions; in vendor and create your session
 7) create livewire dashboard components for admin and user and go to the components view file and add content
 8) create admin and user dashboaard route
 9) create migrations for products and categories and migrate

/// ADD DUMMY VALUES TO TABLE USING FACTORY
php artisan make:factory ProductFactory --model=Product
php artisan make:factory CategoryFactory --model=Category

1) Go to CategoryFactory.php and ProductFactory.php, add use Illuminat\Support\Str;
2) Then add the values you want present in the table to CategoryFactory.php and ProductFactory.php;
3) Go to DatabaseSeeder.php and add:
   \App\Models\Category::factory(6)->create();
   \App\Models\Product::factory(22)->create();
4) to run :  php artisan db:seed

 */