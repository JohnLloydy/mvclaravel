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
        \App\Models\User::factory(5)->create();

        DB::table('products')->insert([
            'lead'          =>  'Soft StuffedToys',
            'heading'       =>  'Teddy Bears',
            'toys_image'  =>  'assets/img/products-01.jpg',
            'desc'          =>  'Just like for adults and adolescents, teddy bears are also loved by babies. In fact, they are one of the most sought-after soft toys for babies. They are loved so much because of their extremely comfortable cuddly forms and because they serve as company and safety for babies.'
        ]);

        DB::table('products')->insert([
            'lead'          =>  'Soft StuffedToys',
            'heading'       =>  'Stuffed Doll',
            'toys_image'  =>  'assets/img/products-02.jpg',
            'desc'          =>  'A stuffed doll is considered one of the most appropriate soft toys for a baby girl. The doll serves as a companion for the babies and often as a make-belief friend. As such, the cognitive, social and emotional skills of the baby develop with the use of a stuffed doll.'
        ]);

        DB::table('products')->insert([
            'lead'          =>  'StuffedToys',
            'heading'       =>  'Disney Characters',
            'toys_image'  =>  'assets/img/products-03.jpg',
            'desc'          =>  'The popularity and relevance of Disney characters for any generation cannot be denied. Even for babies, plush Disney characters are considered the best soft toys for babies. From numerous Disney princess dolls appealing as soft toys for baby girls to Mickey and Minnie Mouse, Donald Duck and Winnie the Pooh finding appeal as soft toys for baby boys, the list of lovable characters is infinite.'
        ]);
    }
}
