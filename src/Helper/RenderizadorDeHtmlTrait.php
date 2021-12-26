<?php

namespace Mayrcon\Marlon\Helper;

trait RenderizadorDeHtmlTrait
{
    public function renderizarHtml(string $caminhoTemplate, array $dados): string
    {
        extract($dados); //Extrai as variáveis da array e torna elas acessíveis
        ob_start(); // output buffer start
        require __DIR__ . '/../View/' . $caminhoTemplate;
        $html = ob_get_clean();

        return $html;
    }
}