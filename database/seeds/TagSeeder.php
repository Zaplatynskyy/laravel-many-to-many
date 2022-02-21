<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['vegetariano','senza glutine','vegano','carne'];

        foreach ($tags as $tag) {
            $new_tag = new Tag();

            $new_tag->name = $tag;
            $new_tag->slug = Str::of($tag)->slug('-');

            $new_tag->save();
        }
    }
}
