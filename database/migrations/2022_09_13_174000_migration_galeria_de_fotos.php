<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        $posts = DB::connection('mysql')->select(
//            '
//        SELECT * from wp_posts p
//        where p.post_status = "publish"
//        and p.post_parent = 817 order by p.post_date DESC; '
//        );
//
//        $position = 0;
//
//        foreach ($posts as $post) {
//            $post_contents = explode('[', $post->post_content);
//
//            $photoTwiilId = DB::table('photos')->insertGetId([
//                'created_at' => $post->post_date,
//                'updated_at' => $post->post_date,
//                'published' => true,
//                'title' => $post->post_title,
//                'credits' => 'INSERIR CRÉDITOS',
//                'publish_start_date' => $post->post_date,
//                'position' => ++$position,
//            ]);
//
//            DB::table('photo_slugs')->insertGetId([
//                'created_at' => $post->post_date,
//                'updated_at' => $post->post_date,
//                'active' => true,
//                'slug' => $post->post_name,
//                'photo_id' => $photoTwiilId,
//                'locale' => 'en',
//            ]);
//            foreach ($post_contents as $content) {
//                $alias = explode(
//                    '-->',
//                    preg_replace('/ess_grid alias="(.*)\"]/', '$0 --> $1', $content)
//                );
//                if (count($alias) > 1) {
//                    $titulo = trim($alias[1]);
//                    dump('Encontrando Galeria: ' . $titulo);
//                    $egGrid = DB::connection('mysql')->select(
//                        'SELECT * FROM wp_eg_grids wpeg where wpeg.handle = "' . $titulo . '"'
//                    );
//
//                    $layers = json_decode($egGrid[0]->layers);
//
//                    $ids = [];
//                    dump('Obtendo os ids das fotos');
//                    foreach ($layers as $layer) {
//                        $layer = json_decode($layer, true);
//
//                        array_push($ids, $layer['custom-image']);
//                        dump($layer['custom-image']);
//
//                        dump('Obtendo as fotos do wp_posts');
//                        $wpphoto = DB::connection('mysql')->select(
//                            "
//                        SELECT * from wp_posts p
//                        where p.id ={$layer['custom-image']};"
//                        );
//                        $wpphoto = $wpphoto[0];
//
//                        $imageSize = getimagesize(
//                            storage_path(
//                                'app/public/uploads/' .
//                                    preg_replace(
//                                        '/http:\/\/www.palaciotiradentes.rj.gov.br\/wp-content\/uploads\//',
//                                        '$1',
//                                        $wpphoto->guid
//                                    )
//                            )
//                        );
//
//                        dump('Inserindo: ' . $wpphoto->post_name);
//                        $mediaId = DB::table('medias')->insertGetId([
//                            'created_at' => $wpphoto->post_date,
//                            'updated_at' => $wpphoto->post_date,
//                            'uuid' => preg_replace(
//                                '/http:\/\/www.palaciotiradentes.rj.gov.br\/wp-content\/uploads\//',
//                                '$1',
//                                $wpphoto->guid
//                            ),
//                            'alt_text' => $wpphoto->post_title,
//                            'width' => $imageSize[0],
//                            'height' => $imageSize[1],
//                            'filename' => $wpphoto->post_name . '.jpg',
//                            'caption' => $layer['title'] ?? '',
//                        ]);
//
//                        dump(
//                            'Inserindo no relacionamento com a tabela Photos ' .
//                                $photoTwiilId .
//                                ' --> ' .
//                                $mediaId
//                        );
//
//                        DB::table('mediables')->insertGetId([
//                            'created_at' => $wpphoto->post_date,
//                            'updated_at' => $wpphoto->post_date,
//                            'mediable_id' => $photoTwiilId,
//                            'mediable_type' => 'App\Models\Photo',
//                            'media_id' => $mediaId,
//                            'crop_x' => 0,
//                            'crop_y' => 0,
//                            'crop_w' => $imageSize[0],
//                            'crop_h' => $imageSize[1],
//                            'role' => 'slideshow',
//                            'crop' => 'default',
//                            'ratio' => 'free',
//                            'metadatas' => '{"caption":null,"altText":null,"video":null}',
//                            'locale' => 'en',
//                        ]);
//                    }
//                }
//            }
//        }
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
