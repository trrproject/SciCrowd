<?php

namespace Obs\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {     
        return $this->render('ObsSecurityBundle:Default:index.html.twig');
    }
    
    public function testeAction()
    {     
        $session = $this->getRequest()->getSession();
        
        $securityContext = $this->container->get('security.context');
        if( $securityContext->isGranted('IS_AUTHENTICATED_ANONYMOUSLY') ){
            return $this->render('ObsSecurityBundle:Default:teste.html.twig', array('info' => 'IS_AUTHENTICATED_ANONYMOUSLY'));
        }if( $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED ') ){
            return $this->render('ObsSecurityBundle:Default:teste.html.twig', array('info' => 'IS_AUTHENTICATED_REMEMBERED '));
        }if( $securityContext->isGranted('IS_AUTHENTICATED_FULLY ') ){
            return $this->render('ObsSecurityBundle:Default:teste.html.twig', array('info' => 'IS_AUTHENTICATED_FULLY '));
        }
        
    }
}
