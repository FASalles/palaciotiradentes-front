<?php

namespace App\Http\Livewire;

use App\Twill\Capsules\Posts\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsFilter extends Component
{

    use WithPagination;

    public $search = '';

    protected $queryString = [
        'search' => ['except'=>''],
        'page' => ['except'=>1]
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        $posts1 = Post::published()->orderByDesc('publish_start_date');

        $posts1->when($this->search, function($queryBuilder) {
            return $queryBuilder->where('title', 'ILIKE', '%'. $this->search . '%');
        });

        return view('livewire.posts-filter')->with(['posts1' => $posts1->paginate(6)]);
    }
}
