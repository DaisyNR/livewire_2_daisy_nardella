<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
{
    #[Validate('required', message: 'Please provide a post title')]
    public $title = '';
 
    #[Validate('required|min:3')] 
    public $subtitle = '';

    #[Validate('required|min:3')] 
    public $body = '';
    
    public function store()
    {
       $this->validate();

        Article::create(
            ['title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);
        
        $this->reset();
        session()->flash('message','Article uploaded!');									
    }										           
    
    public function render()
    {
        return view('livewire.create-article');
    }
    
    
}
