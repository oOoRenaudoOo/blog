<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class AuthorComponent extends Component
{

    public $firstPost;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($firstPost)
    {
        $this->firstPost = $firstPost;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $users = User::inRandomOrder()->limit(5)->get();
        return view('components.author-component', compact ('users'));
    }
}
