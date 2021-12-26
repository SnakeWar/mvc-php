<?php

namespace Mayrcon\Marlon\Controller;

use Mayrcon\Marlon\Entity\Curso;
use Mayrcon\Marlon\Helper\FlashMessageTrait;
use Mayrcon\Marlon\Infra\EntityManagerCreator;

class Exclusao implements InterfaceControladorRequisicao
{
    use FlashMessageTrait;

    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())
            ->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false) {
            header('Location: /listar-cursos');
            return;
        }

        $curso = $this->entityManager->getReference(
            Curso::class, $id
        );

        $this->entityManager->remove($curso);
        $this->entityManager->flush();
        $this->defineMessagem('warning', 'Dados excluídos com sucesso');
        header('Location: /listar-cursos');
    }
}