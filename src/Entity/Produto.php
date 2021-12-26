<?php

namespace Mayrcon\Marlon\Entity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Produto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="decimal")
     */
    private $preco;

    /**
     * @ORM\Column(type="text")
     */
    private $descricao;

    /**
     * @ORM\Column(type="decimal")
     */
    private $imposto;

    public function getId()
    {
        return $this->id;
    }

    public function setNome()
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setPreco()
    {
        $this->preco = $preco;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setDescricao()
    {
        $this->descricao = $descricao;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setImposto()
    {
        $this->imposto = $imposto;
    }

    public function getImposto()
    {
        return $this->imposto;
    }
}