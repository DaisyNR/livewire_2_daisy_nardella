<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class CardArticle extends Component
{
    public $article;

    public function destroy(Article $article)
{
	$article->delete();
    session()->flash('message', 'Article deleted successfully!');
}

    public function render()
    {
        return view('livewire.card-article');
    }
}
