<?php

namespace Obs\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
   
public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ObsCoreBundle:Publication')->findAll();

        return $this->render('ObsCoreBundle:Default:index.html.twig', array(
            'entities' => $entities,
        ));
    }
}
