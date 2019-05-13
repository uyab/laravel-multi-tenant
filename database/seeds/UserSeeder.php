<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domains = ['uyab', 'inoex'];

        foreach($domains as $domain) {
            factory(\App\User::class)->create(['domain' => $domain]);
        }
    }
}
