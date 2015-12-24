<?php

use Illuminate\Database\Seeder;
use GuzzleHttp\Client;

use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $res = $client->get('https://www.kimonolabs.com/api/2qabyeoe?apikey=cQBrKjnK5fz9c0GBVnVm1Gv94s2vPZ8H');
        $categories = json_decode($res->getBody(),true);
        // $categories = Cache::get('client');
        foreach ($categories['results']['collection1'] as $category) {
            $title = $category['job_categories']['text'];
            Category::create(['title' => $title, 'alias' => $title, 'slug' => str_slug($title) ]);
        }
    }
}
