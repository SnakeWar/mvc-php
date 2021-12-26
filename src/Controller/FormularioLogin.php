<?php

namespace Mayrcon\Marlon\Controller;

use Mayrcon\Marlon\Helper\RenderizadorDeHtmlTrait;

class FormularioLogin implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;

    public function processaRequisicao(): void
    {
        echo $this->renderizarHtml('login/formulario.php',[
            'titulo' => 'Login'
        ]);
    }
}