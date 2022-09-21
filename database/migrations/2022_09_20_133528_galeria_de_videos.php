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
        $posts = DB::connection('mysql')->select(
            'SELECT id, post_content, post_title, post_date from wp_posts p
        where p.post_status = "publish"
        and p.post_parent = 883'
        );

        foreach ($posts as $post) {
            ($post_contents = explode("[", $post->post_content));

            foreach ($post_contents as $post_content) {
                $vc_video = explode('-->', preg_replace('/link="(.*)"]/', '$0 --> $1', $post_content));
                if (count($vc_video) > 1) {
                    $link = trim($vc_video[1]);
                    $link = explode('"', $link);
                    $link[0];

                    $attachment = DB::connection('mysql')->select(
                        'SELECT * from wp_posts p
                    where p.post_type = "attachment"
                    and p.post_parent = '.$post->id. ' order by id desc limit 1');
                    
                    dump($attachment);


                    
                }
            }
        }
        dd('fim');
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
