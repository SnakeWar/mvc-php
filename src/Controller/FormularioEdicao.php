<?php

namespace Mayrcon\Marlon\Controller;

use Mayrcon\Marlon\Entity\Curso;
use Mayrcon\Marlon\Helper\RenderizadorDeHtmlTrait;
use Mayrcon\Marlon\Infra\EntityManagerCreator;

class FormularioEdicao implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;

    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repositorioCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
        $this->repositorioCursos = $entityManager
            ->getRepository(Curso::class);
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
        $curso = $this->repositorioCursos->find($id);
        echo $this->renderizarHtml('cursos/formulario.php', [
            'curso' => $curso,
            'titulo' => 'Alterar Curso'
        ]);
    }
}