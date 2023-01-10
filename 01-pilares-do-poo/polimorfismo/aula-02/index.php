<?php

// visibilidade public|private|protected

class Produto
{
    private $nome;
    private $categoria;
    private $cor;
    private $peso;
    private $preco;
    private $fabricante;

    public function __construct(
        $nome,
        $categoria,
        $cor,
        $peso,
        $preco,
        $fabricante
    ) {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->preco = $preco;
        $this->fabricante = $fabricante;
    }

    /**
     * getNome function
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * setFabricante function
     *
     * @param string $fabricante
     * @return void
     */
    public function setFabricante(string $fabricante): void
    {
        $this->fabricante = $fabricante;
    }
}

$produtos = [
    [
        'categoria' => 'Bebidas',
        'nome' => 'Cerveja',
    ],
    [
        'categoria' => 'Bebidas',
        'nome' => 'Cerveja',
    ],
];
