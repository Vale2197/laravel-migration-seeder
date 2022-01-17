<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Package;

class packagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $package = new Package();
            $package->title = $faker->word();
            $package->price = $faker->randomFloat(2, 100, 1000);
            $package->description = $faker->text(100);
            $package->image_url = $faker->imageUrl(400, 380);
            $package->save();
        }
    }
}

/* $table->string('title')->after('id');
            $table->double('price', 10, 2)->after('title');
            $table->text('description')->after('price'); */