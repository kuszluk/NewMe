<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends Controller
{
    /**
     * @Route("/getData/AJAX", name="ajaxRequest")
     */
    public function ajaxAction()
    {

        // Pozyskaj dane z żadania AJAX
        $request = Request::createFromGlobals();
        $listId = $request->request->get('listID');

        // Pozyskaj statystyki użytkownika z bazy danych
        $listDetails = $this->getDoctrine()
            ->getRepository('AppBundle:UserLists')
            ->find($listId);

        // Pozyskaj dane o listach użytkownika
<<<<<<< HEAD
        $em = $this->getDoctrine()->getManager();
        $tasks = $em->getRepository('AppBundle:Task')->findBy([ 'listId' => $listId ]);
=======
        $tasks = $this->getDoctrine()
            ->getRepository('AppBundle:UserLists')
            ->find($listId);
>>>>>>> origin/master

        // TODO: Podmień dane na forma zgodny z JSON
        $response = [
            'success' => true,
            'createdDate' => $listDetails->getDataStart()->format('Y/m/d'),
            'expiresDate'=> $listDetails->getDataEnd()->format('Y/m/d'),
            'finished' => false,
            'tasks' => $tasks,
        ];

        dump($response);

        // Zwróć dane do AJAX
        return new Response(json_encode($response));
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/master
