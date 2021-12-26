<?php

namespace Mayrcon\Marlon\Helper;

trait FlashMessageTrait
{
    public function defineMessagem(string $tipo, string $mensagem): void
    {
        $_SESSION['tipo_mensagem'] = $tipo;
        $_SESSION['mensagem'] = $mensagem;
    }

}