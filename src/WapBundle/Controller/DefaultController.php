<?php

namespace WapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/wap/index")
     */
    public function indexAction()
    {
	var_dump(222);exit;
        return $this->render('WapBundle:Default:index.html.twig');
    }
}
