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
    public function indexAction(Request $request)
    {
        // Just render homepage and wait for login/register action
        if (TRUE === $this->get('security.authorization_checker')->isGranted('ROLE_USER'))
        {
            return $this->render(':Lists:base.html.twig');
        }
        else{
        //$response = $this->forward('FOSUserBundle:Security:login');
            $response = $this->forward('FOSUserBundle:Security:login');
        return $response;
        }
    }
}
