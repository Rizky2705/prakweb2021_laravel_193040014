<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Muhamad Rizky Fauzan',
        //     'email' => 'm.rizky2705@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-proframming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        }

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, laborum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non aspernatur impedit cupiditate perferendis nemo facere velit consequatur commodi, incidunt eveniet rerum doloribus tenetur magnam repellat voluptatibus hic provident vero earum omnis magni in. Repellat ratione praesentium sunt, nihil harum ipsum aut aspernatur similique, a molestias explicabo quam. Totam sapiente sed provident neque itaque veritatis nulla quaerat corrupti obcaecati quos? Possimus accusamus, iste illo et, repellat quod quia facere, voluptatibus totam vero laborum nostrum consequatur? Hic debitis natus officiis. Optio esse dolor nobis neque veritatis, repellendus reiciendis porro tenetur? Consequuntur eveniet explicabo est autem nulla nemo corporis commodi quos animi temporibus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, laborum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non aspernatur impedit cupiditate perferendis nemo facere velit consequatur commodi, incidunt eveniet rerum doloribus tenetur magnam repellat voluptatibus hic provident vero earum omnis magni in. Repellat ratione praesentium sunt, nihil harum ipsum aut aspernatur similique, a molestias explicabo quam. Totam sapiente sed provident neque itaque veritatis nulla quaerat corrupti obcaecati quos? Possimus accusamus, iste illo et, repellat quod quia facere, voluptatibus totam vero laborum nostrum consequatur? Hic debitis natus officiis. Optio esse dolor nobis neque veritatis, repellendus reiciendis porro tenetur? Consequuntur eveniet explicabo est autem nulla nemo corporis commodi quos animi temporibus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, laborum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non aspernatur impedit cupiditate perferendis nemo facere velit consequatur commodi, incidunt eveniet rerum doloribus tenetur magnam repellat voluptatibus hic provident vero earum omnis magni in. Repellat ratione praesentium sunt, nihil harum ipsum aut aspernatur similique, a molestias explicabo quam. Totam sapiente sed provident neque itaque veritatis nulla quaerat corrupti obcaecati quos? Possimus accusamus, iste illo et, repellat quod quia facere, voluptatibus totam vero laborum nostrum consequatur? Hic debitis natus officiis. Optio esse dolor nobis neque veritatis, repellendus reiciendis porro tenetur? Consequuntur eveniet explicabo est autem nulla nemo corporis commodi quos animi temporibus?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, laborum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non aspernatur impedit cupiditate perferendis nemo facere velit consequatur commodi, incidunt eveniet rerum doloribus tenetur magnam repellat voluptatibus hic provident vero earum omnis magni in. Repellat ratione praesentium sunt, nihil harum ipsum aut aspernatur similique, a molestias explicabo quam. Totam sapiente sed provident neque itaque veritatis nulla quaerat corrupti obcaecati quos? Possimus accusamus, iste illo et, repellat quod quia facere, voluptatibus totam vero laborum nostrum consequatur? Hic debitis natus officiis. Optio esse dolor nobis neque veritatis, repellendus reiciendis porro tenetur? Consequuntur eveniet explicabo est autem nulla nemo corporis commodi quos animi temporibus?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    
}
