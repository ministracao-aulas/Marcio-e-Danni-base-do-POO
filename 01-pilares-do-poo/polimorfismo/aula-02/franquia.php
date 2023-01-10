<?php

abstract class FranquiaPhpFood
{
    protected array $paes = [
        'brioche',
        '9 grãos',
        'italiano',
    ];

    protected string $cidade;
    protected string $endereco;

    public function __construct($cidade, $endereco)
    {
        $this->cidade = $cidade;
        $this->endereco = $endereco;
    }

    public function setPaes($paes)
    {
        $this->paes = $paes;
    }

    public function getPaes()
    {
        return $this->paes;
    }

    public function setEndereco(string $endereco)
    {
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setCidade(string $cidade)
    {
        $this->cidade = $cidade;
    }

    public function getCidade()
    {
        return $this->cidade;
    }
}

// class FranquiaPhpFoodCuritiba extends FranquiaPhpFood
// {
//     protected string $cidade;

//     public function __construct()
//     {
//         $this->cidade = 'Curitiba';
//     }
// }

class FranquiaPhpFoodSaoPaulo extends FranquiaPhpFood
{
    protected string $cidade;

    public function __construct()
    {
        $this->cidade = 'Sao Paulo';
    }
}

// $franquia = new FranquiaPhpFoodCuritiba();
// $franquia = new FranquiaPhpFood('Sao Paulo', 'Rua 7 Setembro, 25');
$franquia = new FranquiaPhpFoodSaoPaulo();

echo $franquia->getCidade() . PHP_EOL;
$franquia->setCidade('Itauna');
echo $franquia->getCidade() . PHP_EOL;
