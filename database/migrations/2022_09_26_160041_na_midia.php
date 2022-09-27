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
            'SELECT * FROM wp_posts 
            WHERE post_type = "essential_grid"
            and post_status = "publish"
            '
        );

        foreach ($posts as $post) {
            $contents = explode('[/vc_tta_section]', $post->post_content);
            dump('Migrando o Post: ' . $post->post_name);

            $clipping = [];
            $section =[];
            foreach ($contents as $content) {
                $links = [];
                preg_match_all('/vc_tta_section title="(.*)" /', $content, $title); 
                
                if($title[1]){
                    
                    $section['title'] = $title[1][0];
                    $section['text'] =  str_replace(array("\n", "\r"), '', preg_replace('/\[(.*?)\]/', '', $content));
                    preg_match_all('/<a[^>]+href=\"(.*?)\"[^>]*>(.*?)<\/a>/', $content, $links);
                    if(!$links[1]){                        
                         preg_match_all('/link="url:(.*)\|\|/',$content, $links);
                         if($links[1]){
                            
                            $links[1][0] = preg_replace('/http:\/\/www.palaciotiradentes.rj.gov.br\/wp-content\//', config('app.url').'/storage/$1',
                            urldecode($links[1][0]));

                         }
                    
                       
                    }
                    if($links[1]){
                        $section['link'] = $links[1][0];
                    }else{
                        $section['link'] = null;
                    }
                    
                  dump($section);
                    
                }    
                
                
                
                
                
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
