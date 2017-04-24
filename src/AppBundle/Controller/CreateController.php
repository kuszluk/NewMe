<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreateController extends Controller
{
    /**
     * @Route("/add", name="add")
     */

    public function addAction()
    {
        return $this->render(':Lists/Create:create.html.twig');
    }
}
