<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required', message: 'El campo título es requerido.')]
    public $title = '';

    #[Rule('required', message: 'El campo contenido es requerido.')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'is_archived' => false,
        ]);

        $this->redirect('/posts', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
