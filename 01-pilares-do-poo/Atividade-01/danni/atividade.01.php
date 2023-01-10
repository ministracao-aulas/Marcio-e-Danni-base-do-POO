<?php
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
        $this->idade =(int)$idade;
    }

    public  function get_nome()
    {
        return $this->nome;

    }
    public  function set_nome($nome)
    {
        $this->nome = $nome;

    }
    public  function get_senha()
    {
        return $this->senha;

    }
    public  function set_senha($senha)
    {
        return $this->senha = $senha;

    }
    public  function get_idade()
    {
        return $this->idade;

    }
    public  function set_idade($idade)
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
   
    public function get_altura()
    {
        return $this->altura;
    }

    public function set_altura($endereco)
    {
        $this-> endereco = $endereco;
    }

    public function get_endereco()
    {
        return $this->altura;
    }

    public function set_endereco($endereco)
    {
        $this-> endereco = $endereco;
    }
    public function get_tel()
    {
        return $this->tel;
    }

    public function set_tel($tel)
    {
        $this-> tel = $tel;
    }
    public function get_idade()
    {
        // return $this->idade;
        return($this->idade * 52.115);
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



$pai = new Dad('marcio', '123', 22,'marcio@marcio.com');
$filho = new Son('1.89', 'rua zé', '119999-999','Marcio', '123','marcio@marcio.com',22);
echo $filho->get_idade() .PHP_EOL;
echo $pai->get_nome() .PHP_EOL;

$pai->set_nome('Daniela');
$filho->set_nome('Marcio');

echo $pai->get_nome() .PHP_EOL;
echo $filho->get_nome() .PHP_EOL;


#public function __construct($altura, $endereco, $tel,$nome,$senha, $idade, $email)