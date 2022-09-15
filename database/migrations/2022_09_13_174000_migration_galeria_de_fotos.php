<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $posts = DB::connection('mysql')->select('
        SELECT ID, post_content from wp_posts p
        where p.post_status = "publish"
        and p.post_parent = 817; '
        );

       // dump ($posts);

        foreach($posts as $post) {
            $post_contents =explode("[", $post->post_content);

        foreach($post_contents as $content) {

            // preg_replace('/ess_grid alias="(.*)\"]/', '$0 --> $1', $content);
            // dump ($1);
            $alias = explode('-->',preg_replace('/ess_grid alias="(.*)\"]/', '$0 --> $1', $content));
            if(count($alias) > 1){
             $titulo = dump($alias[1]);

             //$egGrid =
        }


        }

        }
        dd("fim");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
