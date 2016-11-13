<?php

namespace Obs\SecurityBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Obs\SecurityBundle\Entity\Roles;
use Obs\SecurityBundle\Form\RolesType;

/**
 * Roles controller.
 *
 */
class RolesController extends Controller
{
    /**
     * Lists all Roles entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ObsSecurityBundle:Roles')->findAll();

        return $this->render('ObsSecurityBundle:Roles:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Roles entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Roles();
        $form = $this->createForm(new RolesType(), $entity);
        $form->bind($request);
        
        $entity->setRole("ROLE_".$entity->getRole());

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('roles_show', array('id' => $entity->getId())));
        }

        return $this->render('ObsSecurityBundle:Roles:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Roles entity.
     *
     */
    public function newAction()
    {
        $entity = new Roles();
        $form   = $this->createForm(new RolesType(), $entity);

        return $this->render('ObsSecurityBundle:Roles:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Roles entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsSecurityBundle:Roles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Roles entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsSecurityBundle:Roles:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Roles entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsSecurityBundle:Roles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Roles entity.');
        }

        $editForm = $this->createForm(new RolesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsSecurityBundle:Roles:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Roles entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsSecurityBundle:Roles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Roles entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new RolesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('roles_edit', array('id' => $id)));
        }

        return $this->render('ObsSecurityBundle:Roles:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Roles entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ObsSecurityBundle:Roles')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Roles entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('roles'));
    }

    /**
     * Creates a form to delete a Roles entity by id.
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
