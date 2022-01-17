<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Blog;

class blogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        for ($i=0; $i < 100; $i++) { 
            # code...
            $blog = new Blog();
            $blog->title = $faker->word();
            $blog->description = $faker->text(50);
            $blog->text = $faker->text(300);
            $blog->save();
        }

    }

    /*    $table->id();
            $table->string('title', 200);
            $table->text('description');
            $table->text('text');
            $table->timestamps(); */
}
