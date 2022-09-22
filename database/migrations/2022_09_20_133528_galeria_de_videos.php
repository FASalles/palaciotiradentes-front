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
            'SELECT id, post_content, post_title, post_name, post_date from wp_posts p
        where p.post_status = "publish"
        and p.post_parent = 883
        order by post_date desc'
        );
        $position = 0;
        foreach ($posts as $post) {
            dump($post_contents = explode("[", $post->post_content));

            foreach ($post_contents as $post_content) {
                $vc_video = explode('-->', preg_replace('/link="(.*)"]/', '$0 --> $1', $post_content));
                if (count($vc_video) > 1) {
                    $link = trim($vc_video[1]);
                    $link = explode('"', $link);

                    preg_match_all("~\[vc_column_text[^][]*\]\s*(.+?)\[/vc_column_text]~", $post->post_content, $post->text);

                    $attachment = DB::connection('mysql')->select(
                        'SELECT * from wp_posts p
                    where p.post_type = "attachment"
                    and p.post_parent = ' . $post->id . ' order by id desc limit 1'
                    );


                    $videoID = DB::table('videos')->insertGetId(
                        array(
                            'created_at' => $post->post_date,
                            'updated_at' => $post->post_date,
                            'link' => $link[0],
                            'title' => $post->post_title,
                            'text' => $post->text[1] ? $post->text[1][0] : null,
                            'position' => ++$position,
                            'publish_start_date' => $post->post_date,
                            'published' => true
                        )
                    );

                    $videoID = DB::table('video_slugs')->insertGetId(
                        array(
                            'slug' => $post->post_name,
                            'video_id' => $videoID,
                            'locale' => 'en',
                            'active' => true,
                        )
                    );
                }
            }
        }
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('videos')->truncate();
        DB::table('video_slugs')->truncate();
    }
};
