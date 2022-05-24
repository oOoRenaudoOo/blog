<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class PostComponent extends Component
{
  
    /**
     * Create a new component instance.
     *
     * @return void
     */


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $postsreq = Post::with('category', 'user')->latest();
        $recent = $postsreq->first();
 
        $posts = $postsreq->paginate(5);

        return view('components.post-component', compact('posts', 'recent'));
    }
}
