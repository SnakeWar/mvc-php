<?php

namespace Mayrcon\Marlon\Controller;

use Mayrcon\Marlon\Entity\Curso;
use Mayrcon\Marlon\Helper\RenderizadorDeHtmlTrait;
use Mayrcon\Marlon\Infra\EntityManagerCreator;

class ListarCursos implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;
    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }
    public function processaRequisicao(): void
    {
        echo $this->renderizarHtml('cursos/listar-cursos.php', [
            'cursos' => $this->repositorioDeCursos->findAll(),
            'titulo' => 'Lista de Cursos'
        ]);
    }
}