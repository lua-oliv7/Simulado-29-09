<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public function mount($id) {
        $produto = Produto::find($id);

    if($produto == null) {
    }  
        

    }

    /*public function save($id) {
        $produto = Produto::find($id) [

        ]
    }
*/

    public function render()
    {
        return view('livewire.produto-edit');
    }
}
