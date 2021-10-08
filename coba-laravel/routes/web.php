<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhamad Rizky Fauzan",
        "email" => "m.rizky2705@gmail.com",
        "image" => "profile.jpg"
    ]);
});






Route::get('/blog', function () {

    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Hanif",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam excepturi aspernatur fugiat eaque harum ex magni, laudantium neque quidem iure, voluptatum mollitia repudiandae reprehenderit adipisci dolores aut voluptate reiciendis repellat! Est saepe quidem provident in eaque reiciendis, harum repellendus possimus enim delectus ex? Et deserunt molestiae quod dignissimos. Molestiae ipsum, dolore animi esse dicta et explicabo ullam error minima, neque ab quisquam incidunt, enim quae laboriosam omnis quam vero perferendis illum eius. Debitis nemo aperiam distinctio quidem sit cumque ipsam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhamad Rizky Fauzan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam excepturi aspernatur fugiat eaque harum ex magni, laudantium neque quidem iure, voluptatum mollitia repudiandae reprehenderit adipisci dolores aut voluptate reiciendis repellat! Est saepe quidem provident in eaque reiciendis, harum repellendus possimus enim delectus ex? Et deserunt molestiae quod dignissimos. Molestiae ipsum, dolore animi esse dicta et explicabo ullam error minima, neque ab quisquam incidunt, enim quae laboriosam omnis quam vero perferendis illum eius. Debitis nemo aperiam distinctio quidem sit cumque ipsam, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam excepturi aspernatur fugiat eaque harum ex magni, laudantium neque quidem iure, voluptatum mollitia repudiandae reprehenderit adipisci dolores aut voluptate reiciendis repellat! Est saepe quidem provident in eaque reiciendis, harum repellendus possimus enim delectus ex? Et deserunt molestiae quod dignissimos. Molestiae ipsum, dolore animi esse dicta et explicabo ullam error minima, neque ab quisquam incidunt, enim quae laboriosam omnis quam vero perferendis illum eius. Debitis nemo aperiam distinctio quidem sit cumque ipsam."
            ],
    
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post

Route::get('posts/{slug}', function($slug){

    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Hanif",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam excepturi aspernatur fugiat eaque harum ex magni, laudantium neque quidem iure, voluptatum mollitia repudiandae reprehenderit adipisci dolores aut voluptate reiciendis repellat! Est saepe quidem provident in eaque reiciendis, harum repellendus possimus enim delectus ex? Et deserunt molestiae quod dignissimos. Molestiae ipsum, dolore animi esse dicta et explicabo ullam error minima, neque ab quisquam incidunt, enim quae laboriosam omnis quam vero perferendis illum eius. Debitis nemo aperiam distinctio quidem sit cumque ipsam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhamad Rizky Fauzan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam excepturi aspernatur fugiat eaque harum ex magni, laudantium neque quidem iure, voluptatum mollitia repudiandae reprehenderit adipisci dolores aut voluptate reiciendis repellat! Est saepe quidem provident in eaque reiciendis, harum repellendus possimus enim delectus ex? Et deserunt molestiae quod dignissimos. Molestiae ipsum, dolore animi esse dicta et explicabo ullam error minima, neque ab quisquam incidunt, enim quae laboriosam omnis quam vero perferendis illum eius. Debitis nemo aperiam distinctio quidem sit cumque ipsam, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam excepturi aspernatur fugiat eaque harum ex magni, laudantium neque quidem iure, voluptatum mollitia repudiandae reprehenderit adipisci dolores aut voluptate reiciendis repellat! Est saepe quidem provident in eaque reiciendis, harum repellendus possimus enim delectus ex? Et deserunt molestiae quod dignissimos. Molestiae ipsum, dolore animi esse dicta et explicabo ullam error minima, neque ab quisquam incidunt, enim quae laboriosam omnis quam vero perferendis illum eius. Debitis nemo aperiam distinctio quidem sit cumque ipsam."
            ],
    
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] == $slug){
            $new_post = $post;
        }
    }

    return view ('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
