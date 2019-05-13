<?php

use Illuminate\Database\Seeder;

class TenantPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::all();

        foreach ($users as $user) {
            Config::set('database.connections.tenant.database', 'multi_tenant_'.$user->getKey());
            DB::purge('tenant');

            (new \App\Post(['title' => 'Postingan dari '.$user->domain]))->save();
        }
    }
}
