<?php

namespace App\Http\Livewire;

use App\Twill\Capsules\Posts\Models\Post;
use App\Twill\Capsules\Posts\Repositories\PostRepository;
use Livewire\Component;
use Livewire\WithPagination;

class PostsFilter extends Component
{

    public $search = null;


    public function render()
    {

        $posts1 = Post::published()->orderBy('publish_start_date');

        $posts1->when($this->search, function($queryBuilder) {
            return $queryBuilder->where('title', 'ILIKE', '%'. $this->search . '%')
            ->orWhere('description','ILIKE', '%'. $this->search . '%');
        });
       
        return view('livewire.posts-filter')->with(['posts1' => $posts1->get()]);
    }
}
