<?php


// visibilidade public|private|protected

use Monitor as GlobalMonitor;

class ItemDomestico
{
    private $nome;
    private $categoria;
    private $cor;
    private $peso;

    public function __construct($nome, $categoria, $cor, $peso)
    {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->cor = $cor;
        $this->peso = $peso;
    }

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
}

class Monitor extends ItemDomestico
{
    public function __construct($cor, $peso)
    {
        parent::__construct('Monitor', 'informatica', $cor, $peso);
    }

    public function enviarEmail(string $mensagem)
    {
        echo PHP_EOL . "Mensagem:\n{$mensagem} " . PHP_EOL;
    }

    public function setNome($nome)
    {
        $antigoNome = $this->getNome();

        $this->enviarEmail("O nome está sendo alterado de {$antigoNome} para {$nome}");

        parent::setNome($nome);

        $this->enviarEmail("O nome foi alterado de {$antigoNome} para {$nome}");
    }
}

class MonitorPreto extends GlobalMonitor
{
    public function __construct($peso)
    {
        parent::__construct('Preto', $peso);
    }
}

// parametros opcionais

// $monitor = new Monitor(
//     'Preto',
//     1.5
// );
$monitor = new MonitorPreto(1.5);


echo "Item: {$monitor->getNome()}" . PHP_EOL;
$monitor->setNome('Teclado');
echo "Item: {$monitor->getNome()}" . PHP_EOL;


// echo "Item: {$monitor->nome}" . PHP_EOL;
// echo "Categoria: {$monitor->categoria}" . PHP_EOL;
// echo "Cor: {$monitor->cor}" . PHP_EOL;
// echo "Peso: {$monitor->peso}" . PHP_EOL;


// Monitor
// Teclado
