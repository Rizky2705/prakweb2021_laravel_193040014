<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
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


    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
    return $posts->firstwhere('slug', $slug);
    }
}
