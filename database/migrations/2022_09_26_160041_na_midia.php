<?php

use Google\Service\DatabaseMigrationService\DumpFlags;
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
            'SELECT * FROM wp_posts 
            WHERE post_type = "essential_grid"
            and post_status = "publish"
            and id <> 2266
            order by id desc'
        );

        foreach ($posts as $post) {
            $contents = explode('[/vc_tta_section]', $post->post_content);
            dump('Migrando o Post: ' . $post->post_name);

            $clippings = [];
            $section = [];
            $id = rand(1664000000000, 1664999999999);
            $json = null;
            foreach ($contents as $content) {
                $links = [];
                preg_match_all('/vc_tta_section title="(.*)" /', $content, $title);

                if ($title[1]) {
                    $section['id'] = ++$id;
                    $section['medias'] = [];
                    $section['browsers'] = [];
                    $section['blocks'] = [];
                    $section['name'] = $title[1][0];
                    $section['description'] =  strip_tags(str_replace(array("\n", "\r"), '', preg_replace('/\[(.*?)\]/', '', $content)), '<h4>');

                    preg_match_all('/<a[^>]+href=\"(.*?)\"[^>]*>(.*?)<\/a>/', $content, $links);
                    if (!$links[1]) {
                        preg_match_all('/link="url:(.*)\|\|/', $content, $links);
                        if ($links[1]) {

                            $links[1][0] = preg_replace(
                                '/http:\/\/www.palaciotiradentes.rj.gov.br\/wp-content\//',
                                config('app.url') . '/storage/$1',
                                urldecode($links[1][0])
                            );
                        }
                    }
                    if ($links[1]) {
                        $section['link'] = $links[1][0];
                    } else {
                        $section['link'] = null;
                    }

                    $json = $json . json_encode($section) . ',';

                    $clippings = $json;
                }
            }


            $media = DB::connection('mysql')->select(
                'SELECT * FROM wp_posts 
                WHERE post_type = "attachment"
                and post_parent = ' .  $post->ID . ''
            );

            $clippingsID = DB::table('clippings')->insertGetId(
                array(
                    'created_at' => $post->post_date,
                    'updated_at' => $post->post_date,
                    'published' => true,
                    'title' => $post->post_title,
                    'clippings' => '[' . substr($clippings, 0, -1) . ']',
                    'publish_start_date' => $post->post_date,
                )
            );

            $clippingSlugID = DB::table('clipping_slugs')->insertGetId(
                array(
                    'slug' => $post->post_name,
                    'clipping_id' => $clippingsID,
                    'locale' => 'en',
                    'active' => true,
                )
            );
            if (isset($media[0])) {
                $mediaId = DB::table('medias')->insertGetId(
                    array(
                        'created_at' => $post->post_date,
                        'updated_at' => $post->post_date,
                        'uuid' => preg_replace('/http:\/\/www.palaciotiradentes.rj.gov.br\/wp-content\/uploads\//', '$1', $media[0]->guid),
                        'alt_text' => $post->post_title,
                        'width' => 0,
                        'height' => 0,
                        'filename' => $media[0]->post_name . '.jpg'
                    )

                );

                DB::table('mediables')->insertGetId(
                    array(
                        'created_at' => $post->post_date,
                        'updated_at' => $post->post_date,
                        'mediable_id' =>  $clippingsID,
                        'mediable_type' => 'App\Models\Clipping',
                        'media_id' => $mediaId,
                        'crop_x' => 0,
                        'crop_y' => 0,
                        'crop_w' => 0,
                        'crop_h' => 0,
                        'role' => 'cover',
                        'crop' => 'default',
                        'ratio' => 'default',
                        'metadatas' => '{"caption":null,"altText":null,"video":null}',
                        'locale' => 'en'

                    )
                );

                DB::table('mediables')->insertGetId(
                    array(
                        'created_at' => $post->post_date,
                        'updated_at' => $post->post_date,
                        'mediable_id' =>  $clippingsID,
                        'mediable_type' => 'App\Models\Clipping',
                        'media_id' => $mediaId,
                        'crop_x' => 0,
                        'crop_y' => 0,
                        'crop_w' => 0,
                        'crop_h' => 0,
                        'role' => 'cover',
                        'crop' => 'mobile',
                        'ratio' => 'mobile',
                        'metadatas' => '{"caption":null,"altText":null,"video":null}',
                        'locale' => 'en'

                    )
                );

                DB::table('mediables')->insertGetId(
                    array(
                        'created_at' => $post->post_date,
                        'updated_at' => $post->post_date,
                        'mediable_id' =>  $clippingsID,
                        'mediable_type' => 'App\Models\Clipping',
                        'media_id' => $mediaId,
                        'crop_x' => 0,
                        'crop_y' => 0,
                        'crop_w' => 0,
                        'crop_h' => 0,
                        'role' => 'cover',
                        'crop' => 'flexible',
                        'ratio' => 'free',
                        'metadatas' => '{"caption":null,"altText":null,"video":null}',
                        'locale' => 'en'

                    )
                );
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
        DB::table('clippings')->truncate();
        DB::table('clipping_slugs')->truncate();
    }
};
