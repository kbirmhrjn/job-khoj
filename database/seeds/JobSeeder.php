<?php

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =App\Category::lists('id')->toArray();
        factory(App\Job::class, 70)->create()->each(function($job) use ($categories){
                $job->category()->attach($categories[array_rand($categories)]);
        });
    }
}
