<?php
namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MainController extends Controller
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

    /**
     * @Route("/rooms", name="rooms")
     */
    public function loadrooms()
    {
        return $this
        ->render('rooms.html.twig', [
            'controller_name' => 'MainController',
        ]);
       /* $user = new User();
        $form = $this->createForm(UserType::class, $user);*/
        /*return $this->render(
            'registration/register.html.twig',
            array('form' => $form->createView())
        );*/
    }


}