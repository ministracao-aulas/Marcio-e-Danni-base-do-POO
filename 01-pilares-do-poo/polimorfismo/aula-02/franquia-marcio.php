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

// NÃO ALTERAR DAQUI PARA CIMA
class FranquiaPhpFoodSaoPaulo extends FranquiaPhpFood
{
    protected string $cidade;
    protected string $cidade_anterior;

    public function __construct()
    {
        $this->cidade = 'Sao Paulo';
    }

    public function setCidade(string $cidade)
    {
        $this->setCidadeAnterior($this->getCidade());
        $this->cidade = $cidade;
    }

    public function setCidadeAnterior(string $cidade_anterior)
    {
        $this->cidade_anterior = $cidade_anterior;
    }

    public function getCidadeAnterior()
    {
        return $this->cidade_anterior;
    }
}
// NÃO ALTERAR DAQUI PARA BAIXO

// $franquia = new FranquiaPhpFoodCuritiba();
// $franquia = new FranquiaPhpFood('Sao Paulo', 'Rua 7 Setembro, 25');
$franquia = new FranquiaPhpFoodSaoPaulo();

echo $franquia->getCidade() . PHP_EOL;
$franquia->setCidade('Itauna'); // Não pode funcionar
echo $franquia->getCidade() . PHP_EOL;
echo $franquia->getCidadeAnterior() . PHP_EOL;

$valorCidadeAnterior = function () use ($franquia) {
    try {
        return $franquia->getCidadeAnterior();
    } catch (\Throwable $th) {
        return 'Erro';
    }
};

echo (
    ($valorCidadeAnterior() === 'Sao Paulo'
        && $franquia->getCidade() == 'Itauna'
    ) ? 'passou' : 'errrrrrow'
) . PHP_EOL;

$franquia->setCidade('Itauna'); // Não pode funcionar

echo (
    ($valorCidadeAnterior() === 'Itauna'
        && $franquia->getCidade() == 'Itauna'
    ) ? 'passou' : 'errrrrrow'
) . PHP_EOL;
