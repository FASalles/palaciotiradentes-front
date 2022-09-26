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
        //
        $posts = DB::connection('mysql')->select(
            'SELECT * FROM palaciodb.wp_posts 
            WHERE post_type = "essential_grid"
            and post_status = "publish"
            and id = 965'
        );

        foreach ($posts as $post) {
            $contents = explode('[/vc_tta_section]', $post->post_content);

            $clipping = [];

            foreach ($contents as $content) {
                preg_match_all('/vc_tta_section title="(.*)" /', $content, $index);
                // preg_match_all('~\[vc_column_text[^][]*\]\s*(.+?)\[/vc_column_text]~', $content, $text);
                $text = str_replace(array("\n", "\r"), '', preg_replace('/\[(.*?)\]/', '', $content));
                dump($index);
                dump($text);
                $i = $index[1];
                //array_push($clipping, [$i=>$text]);

            }
            //dump($clipping);

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
