<?php

namespace Mayrcon\Marlon\Controller;

use Mayrcon\Marlon\Entity\Usuario;
use Mayrcon\Marlon\Helper\FlashMessageTrait;
use Mayrcon\Marlon\Infra\EntityManagerCreator;

class RealizarLogin implements InterfaceControladorRequisicao
{
    use FlashMessageTrait;
    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repositorioDeUsuarios;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeUsuarios = $entityManager
            ->getRepository(Usuario::class);
    }

    public function processaRequisicao(): void
    {
        
        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_VALIDATE_EMAIL
        );
        if(is_null($email) || $email === false){
            $this->defineMessagem('danger', 'O e-mail digitado não é um e-mail válido');
            header('Location: /login');
            return;
        }
        $senha = filter_input(
          INPUT_POST,
          'email',
          FILTER_SANITIZE_STRING
        );

        $usuario = $this->repositorioDeUsuarios->findOneBy(['email' => $email]);
        if(is_null($usuario) || $usuario->senhaEstaCorreta($senha)){
            $this->defineMessagem('danger', 'E-mail ou senha inválidos');
            header('Location: /login');
            return;
        }

        $_SESSION['logado'] = true;
        $_SESSION['id'] = $usuario->getId();
        $_SESSION['email'] = $usuario->getEmail();
        header('Location: /listar-cursos');


    }
}