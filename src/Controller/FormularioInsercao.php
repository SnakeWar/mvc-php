<?php

namespace Mayrcon\Marlon\Controller;

use Mayrcon\Marlon\Helper\RenderizadorDeHtmlTrait;

class FormularioInsercao implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;

    public function processaRequisicao(): void
    {
        echo $this->renderizarHtml('cursos/formulario.php', [
            'titulo' => 'Novo Curso'
        ]);
    }
}
