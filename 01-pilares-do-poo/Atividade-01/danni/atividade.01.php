<?php

use Core\TestCore\Test;

require_once __DIR__ . '/../../../custom_autoloader.php';

class Dad
{
    public $nome;
    private $senha;
    protected $idade;
    protected $email;

    public function __construct($nome, $senha, $email, $idade)
    {
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
        $this->idade = (int) $idade;
    }

    public  function getNome()
    {
        return $this->nome;

    }
    public  function setNome($nome)
    {
        $this->nome = $nome;

    }
    public  function getSenha()
    {
        return $this->senha;

    }
    public  function setSenha($senha)
    {
        return $this->senha = $senha;

    }
    public  function getIdade()
    {
        return $this->idade;

    }
    public  function setIdade($idade)
    {
        return $this->idade = $idade;

    }
}

class Son extends Dad
{
    public $altura;
    protected $endereco;
    private $tel;

    public function __construct( $altura,  $endereco,  $tel,  $nome,  $senha,$email,$idade)
    {
        parent::__construct($nome,$senha, $email,$idade);
        $this->altura = $altura;
        $this->endereco = $endereco;
        $this->tel = $tel;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($endereco)
    {
        $this-> endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->altura;
    }

    public function setEndereco($endereco)
    {
        $this-> endereco = $endereco;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this-> tel = $tel;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getIdadeEmSemanas()
    {
        return ($this->getIdade() * 52.115);
    }
}

// idade convertida de anos para semana

class Mom extends Son
{
    public $sobrenome;
    protected $cpf;
    private $anoNascimento;


    public function __construct($sobrenome, $cpf, $anoNascimento)
    {
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->anoNascimento = $anoNascimento;
    }

    public function get_sobrenome()
    {
        return $this->sobrenome;
    }

    public function set_sobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function get_cpf($cpf)
    {
        return $this->cpf;
    }

    public function set_cpf($cpf)
    {
        $this->cpf = $cpf ;
    }

    public function get_anoNascimento()
    {
        return $this->anoNascimento;
    }

    public function set_anoNascimento($anoNascimento)
    {
        $this->anoNascimento = $anoNascimento;
    }
}

$pai = new Dad('marcio', '123', 22, 'marcio@marcio.com');
$filho = new Son('1.89', 'rua zé', '119999-999', 'Marcio', '123', 'marcio@marcio.com', 22);

//  = fn  => $outputResult($expect === $currentValue);

$idade = 22;

Test::expect($filho->getIdade(), $idade, "A idade precisa ser igual a {$idade}");

$idadeEmSemanas = ($idade * 52.115);
Test::expect($filho->getIdadeEmSemanas(), $idadeEmSemanas, "A idade em semanas precisa ser igual a {$idadeEmSemanas}");

Test::expect($pai->getNome(), 'marcio', 'O nome do pai precisa ser marcio');

$pai->setNome('Daniela');
Test::expect($pai->getNome(), 'Daniela', 'O nome do pai precisa ser Daniela');

$pai->setNome('Marcio');
Test::expect($pai->getNome(), 'Marcio', 'O nome do pai precisa ser Marcio');

$filho->setNome('Marcio');
Test::expect($filho->getNome(), 'Marcio', 'O nome do filho precisa ser Marcio');
