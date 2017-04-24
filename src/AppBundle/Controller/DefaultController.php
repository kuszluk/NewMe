<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        // Sprawdź status użytkownika i jeśli jest zalogowany
        if (TRUE === $this->get('security.authorization_checker')->isGranted('ROLE_USER'))
        {

            // Pozyskaj statystyki użytkownika z bazy danych
            $stats = $this->getDoctrine()
                        ->getRepository('AppBundle:Stats')
                        ->findAll();

            // Pozyskaj dane o listach użytkownika
            $UserLists = $this->getDoctrine()
                ->getRepository('AppBundle:UserLists')
                ->findAll();


            // Wygeneruj widok aplikacji
            return $this->render(':Lists/Home:home.html.twig', [ 'stats' => $stats, 'lists' => $UserLists]);
        }
        // Jeśli nie jest zalogowany
        else{
            // Przekieruj go do logowania
            $response = $this->forward('FOSUserBundle:Security:login');
        return $response;
        }
    }
}
