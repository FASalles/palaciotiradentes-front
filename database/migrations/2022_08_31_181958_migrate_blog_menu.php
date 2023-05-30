<?php

use App\Twill\Capsules\Posts\Models\Post;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;
class MigrateBlogMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        DB::table('post_slugs')->truncate();
        DB::table('post_revisions')->truncate();
        DB::table('posts')->truncate();

        $posts = DB::connection('mysql')->select(
            'select * ' .
                'from wp_posts ' .
                ' where 1 = 1 ' .
                'and post_status = "publish" ' .
                ' and post_type = "post"' .
                ' order by id ' .
                //                ' limit 10 ' .
                ' '
        );

        foreach ($posts as $postOld) {
            $post = new Post();

            $post->title = $postOld->post_title;

            $post->wp_content = $postOld->post_content;

            $postContent = $this->getPlainContent($postOld->post_content);

            // Replace <img> class attributes with "img-fluid"
            $pattern = '/(<img[^>]*?)\bclass=(["\'])(.*?)\2/';
            $replacement = '$1class="img-fluid" $3';
            $postContent = preg_replace($pattern, $replacement, $postContent);

            // Replace <img> tags without class attribute with class="img-fluid"
            $pattern = '/<img((?:(?!class)[\s\S])*?)(?<!class=")\/?>/i';
            $replacement = '<img class="img-fluid"$1/>';
            $postContent = preg_replace($pattern, $replacement, $postContent);

            $postContent = preg_replace(
                '/http:\/\/www.palaciotiradentes.rj.gov.br\/wp-content\//',
                '/storage/$1',
                $postContent
            );

            $post->subject = $postContent;
            $post->publish_start_date = $postOld->post_date;
            $post->published = true;
            $post->save();

            DB::insert(
                'insert into post_slugs (post_id, created_at, updated_at, slug, locale, active) values (?, ?, ?, ?, ?, ?)',
                [$post->id, now(), now(), Str::slug($post->title), 'en', true]
            );
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

    /**
     * @param mixed $postOld
     * @param $width
     * @return mixed
     */
    protected function getPlainContent(mixed $plain_content)
    {
        $plain_content = str_replace(
            ["\n", "\r"],
            '<p>',
            preg_replace('/\[(.*?)\]/', '', $plain_content)
        );

        $plain_content = strip_tags($plain_content, '');

        return $plain_content;
    }
}
