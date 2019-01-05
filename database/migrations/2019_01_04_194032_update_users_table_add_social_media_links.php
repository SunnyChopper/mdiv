<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTableAddSocialMediaLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->string('facebook_link', 256)->nullable();
            $table->string('twitter_link', 256)->nullable();
            $table->string('instagram_link', 256)->nullable();
            $table->string('youtube_link', 256)->nullable();
            $table->string('github_link', 256)->nullable();
            $table->string('dribbble_link', 256)->nullable();
            $table->string('website_link', 256)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn('facebook_link');
            $table->dropColumn('twitter_link');
            $table->dropColumn('website_link');
            $table->dropColumn('instagram_link');
            $table->dropColumn('youtube_link');
            $table->dropColumn('github_link');
            $table->dropColumn('dribbble_link');
        });
    }
}
