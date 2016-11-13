<?php

namespace Obs\SecurityBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Obs\SecurityBundle\Entity\Users;
use Obs\SecurityBundle\Form\UsersType;
use Obs\SecurityBundle\Form\UsersSignupType;
use Obs\SecurityBundle\Form\UsersEditType;

/**
 * Users controller.
 *
 */
class UsersController extends Controller
{
    /**
     * Lists all Users entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ObsSecurityBundle:Users')->findAll();

        return $this->render('ObsSecurityBundle:Users:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Users entity.
     *
     */
    public function createAction(Request $request)
    {
        $factory = $this->get('security.encoder_factory');
        
        
        $entity  = new Users();
        $form = $this->createForm(new UsersType(), $entity);
        $form->bind($request);
        
        $encoder = $factory->getEncoder($entity);
        $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
        $entity->setPassword($password);
        

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('users_show', array('id' => $entity->getId())));
        }

        return $this->render('ObsSecurityBundle:Users:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Users entity.
     *
     */
    public function newAction()
    {
        $entity = new Users();
        $form   = $this->createForm(new UsersType(), $entity);

        return $this->render('ObsSecurityBundle:Users:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    /*************************************************/
    /*************************************************/
    public function signupAction()
    {
        $entity = new Users();
        $form   = $this->createForm(new UsersSignupType(), $entity);

        return $this->render('ObsSecurityBundle:Users:signup.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    public function signupcreateAction(Request $request)
    {
        $factory = $this->get('security.encoder_factory');
        
        
        $entity  = new Users();
        $form = $this->createForm(new UsersSignupType(), $entity);
        $form->bind($request);
        
        $encoder = $factory->getEncoder($entity);
        $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
        $entity->setPassword($password);
        

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('homepage', array('id' => $entity->getId())));
        }

        return $this->render('ObsSecurityBundle:Users:signup.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /*************************************************/
    /*************************************************/

    /**
     * Finds and displays a Users entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsSecurityBundle:Users')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Users entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsSecurityBundle:Users:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Users entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsSecurityBundle:Users')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Users entity.');
        }

        $editForm = $this->createForm(new UsersEditType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsSecurityBundle:Users:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Users entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsSecurityBundle:Users')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Users entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UsersType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('users_edit', array('id' => $id)));
        }

        return $this->render('ObsSecurityBundle:Users:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Users entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ObsSecurityBundle:Users')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Users entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('users'));
    }

    /**
     * Creates a form to delete a Users entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
