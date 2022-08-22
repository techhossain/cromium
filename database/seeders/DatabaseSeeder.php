<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $posts = [
            'title' => 'Lorem ipsum dolor sit amet.',
            'slug'  => '',
            'thumbnail' => 'https://source.unsplash.com/random/900x450',
            'excerpt'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, quae deleniti temporibus obcaecati adipisci debitis.',
            'content'   => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione repudiandae cum iste et maiores dolore nobis mollitia aspernatur incidunt debitis provident ex, molestias, recusandae eos aliquid, atque ducimus? Consequuntur, animi.',
            'author_name'   => 'Kashem Mia',
            'category'      => 'Lorem Ipsum'

        ];

        DB::table('posts')->insert($posts);


        // \App\Models\User::factory(10)->create();
    }
}
