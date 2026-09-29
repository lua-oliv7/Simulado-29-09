<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public $nome = '';
    public $preco = '';
    public $qtd_minima = '';
    public $qtd_estoque = '';
    public $prazo_validade = '';
    public $cor = '';
    public $textura = '';
    public $peso = '';
    public $unidade_medida = '';

    public function render()
    {
        $produto = Produto::where(
            'nome',
            'preco',
        );
        return view('livewire.produto-index');
    }
}
