<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
        use withpagination;
    public function all_post(){
        return Post::orderbydesc('id')->paginate('5');

    }
    public function render()
    {
        return view('livewire.posts',[
            'posts' =>$this->all_post()
        ]);
    }
}
