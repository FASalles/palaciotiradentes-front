<?php

use App\Models\Clipping as ClippingAlias;
use App\Twill\Capsules\Posts\Models\Post as Post;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrateBlogMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $posts = DB::connection('mysql')->select(
            'select * ' .
                'from wp_posts ' .
                ' where 1 = 1 ' .
                'and post_status = "publish" ' .
                ' and post_type = "post"' .
                ' order by id ' .
                ' '
        );

        foreach ($posts as $postOld) {
            dump($postOld->post_title);

            $post = new Post();

            $post->title = $postOld->post_title;
            preg_match(
                '/(?:[^\w-])width\s*(=\s*(["\'])[^"\']+\2\s*|:\s*[^;]+)/',
                $postOld->post_content,
                $width
            );

            $postOld->post_content = preg_replace('/\bclass="[^"]*"/', 'class="img-fluid"', $postOld->post_content);

            dump($width);

            $post->subject =
                preg_replace(
                    '/http:\/\/www.palaciotiradentes.rj.gov.br\/wp-content\//',
                    '/storage/$1',
                    str_replace(
                        ["\n", "\r"],
                        '<p>',
                        preg_replace(
                            '/\[(.*?)\]/',
                            '',

                            $postOld->post_content
                        )
                    )


                );
            $post->publish_start_date = $postOld->post_date;
            $post->published = true;
            $post->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('posts')->truncate();
    }
}
