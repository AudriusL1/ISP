<?php
namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MainController
{
    /**
     * @Route("/menu", name="menu")
     */
    public function main()
    {
    return new Response('SVEIKI ATVYKE');
       /* $user = new User();
        $form = $this->createForm(UserType::class, $user);*/
        /*return $this->render(
            'registration/register.html.twig',
            array('form' => $form->createView())
        );*/
    }
}