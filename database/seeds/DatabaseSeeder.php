<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $tables = [
                            'categories',
                            'users',
                            'jobs',
                            'category_job'
                        ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables();
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(JobSeeder::class);
    }

    public function truncateTables()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
