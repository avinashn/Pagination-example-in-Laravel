## Prerequisites
<ul>
<li>After cloning this repository, go to the root folder, run the following command/s,
<pre>
    composer install
    composer update</pre>
</li>
<li>Rename .env.example to .env and provide your database details there.</li>
<li>Run <pre>php artisan migrate</pre> </li>
<li>Enter some dummy data in users table <i>name</i> and <i>email</i> fields(5+ entries for pagination to work) </li>
<li>Run <pre>php artisan key:generate</pre> </li>
</ul>

## Working Demo
You can see the demo of the project <a href="http://demos.justlaravel.com/Pagination-in-Laravel/">here</a>

## Reference Post
<a href="http://justlaravel.com/pagination-in-laravel/">http://justlaravel.com/pagination-in-laravel/
</a>
