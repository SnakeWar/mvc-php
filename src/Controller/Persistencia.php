<?php

namespace Mayrcon\Marlon\Controller;

use Mayrcon\Marlon\Entity\Curso;
use Mayrcon\Marlon\Helper\FlashMessageTrait;
use Mayrcon\Marlon\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
{
    use FlashMessageTrait;
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $descricao = filter_input(
            INPUT_POST,
            'descricao',
            FILTER_SANITIZE_STRING
        );
        $curso = new Curso();
        $curso->setDescricao($descricao);

        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if(!is_null($id) && $id !== false) {
            $curso->setId($id);
            $this->entityManager->merge($curso);
            $this->defineMessagem('success', 'Dados atualizados com sucesso!');
        }else {
            $this->entityManager->persist($curso);
            $this->defineMessagem('success', 'Dados inseridos com sucesso!');
        }

        $this->entityManager->flush();
        header('Location: /listar-cursos', 'true', 302);
    }
}