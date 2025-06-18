<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    public function run():void
    {   
        Post::factory()->count(100)->create();
        $this->call([
            CategorySeeder::class
        ]);
    }
}
