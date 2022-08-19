<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleJsonRepeaters;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Clipping;

class ClippingRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleRevisions, HandleJsonRepeaters;

    public function __construct(Clipping $model)
    {
        $this->model = $model;
    }

    protected $jsonRepeaters = [
        'clippings',
    ];

    public function allPublished()
    {
        return $this->model
            ::published()
            ->orderBy('publish_start_date')
            ->get();
    }

    public function getClippings()
    {

        $teste = $this->model
            ::published()
            ->orderBy('publish_start_date')
            ->select('clippings')
            ->get();
            
          //return ( (object)($teste[0]->clippings));
            /* foreach (($teste[0]->clippings) as $key) {
               collect($key);
            }
            dd($teste);  */
    }

}
