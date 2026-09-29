<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $preco;
    public $qtd_minima;
    public $qtd_estoque;
    public $prazo_validade;
    public $cor;
    public $textura;
    public $peso;
    public $unidade_medida;


    public function store(){
        $this->validate([
            'nome' => 'require',
            'preco' => 'require|numeric',
            'qtd_minima' => 'require|integer',
            'qtd_estoque' => 'require|integer',
            'prazo_validade' => 'require|date',
            'cor' => 'require|string',
            'textura' => 'nullable|string',
            'peso' => 'require|string',
            'unidade_medida' => 'require|string'
        ]);

        Produto::create([
            'nome' => $this->nome,
            'preco' => $this->preco,
            'qtd_minima' => $this->qtd_minima,
            'qtd_estoque' => $this->qtd_estoque,
            'prazo_validade' => $this->prazo_validade,
            'cor' => $this->cor,
            'textura' => $this->textura,
            'peso' => $this->peso,
            'unidade_medida' => $this->unidade_medida,
        ]);
        }

    public function render()
    {
        return view('livewire.produto-create');
    }
}
