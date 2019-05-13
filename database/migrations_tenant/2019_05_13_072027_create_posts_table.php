<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $users = \App\User::all();

        foreach($users as $user) {

            Config::set('database.connections.tenant.database', 'multi_tenant_'.$user->getKey());
            DB::purge('tenant');

            Schema::connection('tenant')->create('posts', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title', 255);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $users = \App\User::all();

        foreach ($users as $user) {
            Config::set('database.connections.tenant.database', 'multi_tenant_'.$user->getKey());
            DB::purge('tenant');

            Schema::connection('tenant')->dropIfExists('posts');
        }
    }
}
