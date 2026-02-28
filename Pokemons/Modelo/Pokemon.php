<?php

Class Pokemon{
private $nome;
private $Imagem;
private $tipo;
private $dados;
private $descricao;

// seta os dados
public function __construct($nome, $tipo, $Imagem, $dados,$descricao) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->Imagem = $Imagem;
        $this->dados = $dados;
         $this->descricao = $descricao;
            }
/**
 * Get the value of nome
 */
public function getNome()
{
return $this->nome;
}

/**
 * Set the value of nome
 */
public function setNome($nome): self
{
$this->nome = $nome;

return $this;
}

/**
 * Get the value of Imagem
 */
public function getImagem()
{
return $this->Imagem;
}

/**
 * Set the value of Imagem
 */
public function setImagem($Imagem): self
{
$this->Imagem = $Imagem;

return $this;
}

/**
 * Get the value of tipo
 */
public function getTipo()
{
return $this->tipo;
}

/**
 * Set the value of tipo
 */
public function setTipo($tipo): self
{
$this->tipo = $tipo;

return $this;
}

/**
 * Get the value of dados
 */
public function getDados()
{
return $this->dados;
}

/**
 * Set the value of dados
 */
public function setDados($dados): self
{
$this->dados = $dados;

return $this;
}


/**
 * Get the value of descricao
 */
public function getDescricao()
{
return $this->descricao;
}

/**
 * Set the value of descricao
 */
public function setDescricao($descricao): self
{
$this->descricao = $descricao;

return $this;
}
} 


