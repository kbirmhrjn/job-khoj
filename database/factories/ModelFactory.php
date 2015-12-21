<?php
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('kabir'),
        'remember_token' => str_random(10),
        'username' => $faker->userName,
        'dob' => $faker->dateTimeInInterval('-40 years', '-20 years'),
        'mobile' => $faker->phoneNumber,
        'address' => $faker->streetAddress,
        'country' => $faker->country,
        'state' => $faker->state,
        'district' => $faker->district,
        'role' => 'user',
        'company' => $faker->company,
        'tagline' => $faker->catchPhrase,
        'website' => $faker->domain,
        'logo' => $faker->imageUrl(150, 130)
    ];
});
$factory->define(App\Job::class, function (Faker\Generator $faker) {
        $level = ['entry','intermediate', 'expert'];
        $jobType = ['Full Time','Contract','Part Time','Freelancer','Intern'];
        return [
            'title' => $faker->word,
            'description' => $faker->paragraph,
            'how_to_apply' => $faker->paragraph,
            'level' => $level[rand(0,2)],
            'job_type' => $jobType[rand(0,4)],
            'location' => $faker->address,
            'country' => $faker->country,
            'city' => $faker->city,
        ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    $title = $faker->unique()->word;
    return [
            'title' => $title,
            'alias' => $title,
            'slug' => str_slug($title)
        ];
});


















