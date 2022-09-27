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
            '
        SELECT * from wp_posts p
        where p.post_status = "publish"
        and p.post_parent = 817; '
        );


        foreach ($posts as $post) {
            $post_contents = explode("[", $post->post_content);

            $photoTwiilId = DB::table('photos')->insertGetId(
                array(
                    'created_at' => $post->post_date,
                    'updated_at' => $post->post_date,
                    'published' => true,
                    'title' => $post->post_title,
                    'credits' => 'INSERIR CRÉDITOS',
                    'publish_start_date' => $post->post_date
                )
            );

            DB::table('photo_slugs')->insertGetId(
                array(
                    'created_at' => $post->post_date,
                    'updated_at' => $post->post_date,
                    'active' => true,
                    'slug' => $post->post_name,
                    'photo_id' => $photoTwiilId,
                    'locale' => 'en'
                )
            );
            foreach ($post_contents as $content) {

                $alias = explode('-->', preg_replace('/ess_grid alias="(.*)\"]/', '$0 --> $1', $content));
                if (count($alias) > 1) {
                    $titulo = trim($alias[1]);
                    dump("Encontrando Galeria: " . $titulo);
                    $egGrid = DB::connection('mysql')->select('SELECT * FROM wp_eg_grids wpeg where wpeg.handle = "' . $titulo . '"');

                    $layers = json_decode($egGrid[0]->layers);

                    $ids = array();
                    dump("Obtendo os ids das fotos");
                    foreach ($layers as $layer) {
                        $layer = json_decode($layer, true);

                        array_push($ids, $layer["custom-image"]);
                        dump($layer["custom-image"]);
                    }
                    dump("Obtendo as fotos do wp_posts");
                    $WPphotos = DB::connection('mysql')->select(
                        '
                    SELECT * from wp_posts p
                    where p.id in ( ' . implode(",", $ids) . ')'
                    );

                    foreach ($WPphotos as $wpphoto) {

                        dump('Inserindo: ' . $wpphoto->post_name);
                        $mediaId = DB::table('medias')->insertGetId(
                            array(
                                'created_at' => $wpphoto->post_date,
                                'updated_at' => $wpphoto->post_date,
                                'uuid' => preg_replace('/http:\/\/www.palaciotiradentes.rj.gov.br\/wp-content\/uploads\//', '$1', $wpphoto->guid),
                                'alt_text' => $wpphoto->post_title,
                                'width' => 0,
                                'height' => 0,
                                'filename' => $wpphoto->post_name . '.jpg'
                            )
                        );

                        dump('Inserindo no relacionamento com a tabela Photos ' . $photoTwiilId . ' --> ' . $mediaId);

                        DB::table('mediables')->insertGetId(
                            array(
                                'created_at' => $wpphoto->post_date,
                                'updated_at' => $wpphoto->post_date,
                                'mediable_id' => $photoTwiilId,
                                'mediable_type' => 'App\Models\Photo',
                                'media_id' => $mediaId,
                                'crop_x' => 0,
                                'crop_y' => 0,
                                'crop_w' => 0,
                                'crop_h' => 0,
                                'role' => 'slideshow',
                                'crop' => 'default',
                                'ratio' => 'default',
                                'metadatas' => '{"caption":null,"altText":null,"video":null}',
                                'locale' => 'en'

                            )
                        );

                        DB::table('mediables')->insertGetId(
                            array(
                                'created_at' => $wpphoto->post_date,
                                'updated_at' => $wpphoto->post_date,
                                'mediable_id' => $photoTwiilId,
                                'mediable_type' => 'App\Models\Photo',
                                'media_id' => $mediaId,
                                'crop_x' => 0,
                                'crop_y' => 0,
                                'crop_w' => 0,
                                'crop_h' => 0,
                                'role' => 'slideshow',
                                'crop' => 'mobile',
                                'ratio' => 'mobile',
                                'metadatas' => '{"caption":null,"altText":null,"video":null}',
                                'locale' => 'en'

                            )
                        );

                        DB::table('mediables')->insertGetId(
                            array(
                                'created_at' => $wpphoto->post_date,
                                'updated_at' => $wpphoto->post_date,
                                'mediable_id' => $photoTwiilId,
                                'mediable_type' => 'App\Models\Photo',
                                'media_id' => $mediaId,
                                'crop_x' => 0,
                                'crop_y' => 0,
                                'crop_w' => 0,
                                'crop_h' => 0,
                                'role' => 'slideshow',
                                'crop' => 'flexible',
                                'ratio' => 'free',
                                'metadatas' => '{"caption":null,"altText":null,"video":null}',
                                'locale' => 'en'

                            )
                        );
                    }
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
        DB::table('medias')->truncate();
        DB::table('photos')->truncate();
    }
};
