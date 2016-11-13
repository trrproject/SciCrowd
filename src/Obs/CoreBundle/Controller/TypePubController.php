<?php

namespace Obs\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Obs\CoreBundle\Entity\TypePub;
use Obs\CoreBundle\Form\TypePubType;

/**
 * TypePub controller.
 *
 */
class TypePubController extends Controller
{
    /**
     * Lists all TypePub entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ObsCoreBundle:TypePub')->findAll();

        return $this->render('ObsCoreBundle:TypePub:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new TypePub entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new TypePub();
        $form = $this->createForm(new TypePubType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('typepub_show', array('id' => $entity->getId())));
        }

        return $this->render('ObsCoreBundle:TypePub:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new TypePub entity.
     *
     */
    public function newAction()
    {
        $entity = new TypePub();
        $form   = $this->createForm(new TypePubType(), $entity);

        return $this->render('ObsCoreBundle:TypePub:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypePub entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:TypePub')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypePub entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:TypePub:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing TypePub entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:TypePub')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypePub entity.');
        }

        $editForm = $this->createForm(new TypePubType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:TypePub:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing TypePub entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:TypePub')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypePub entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TypePubType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('typepub_edit', array('id' => $id)));
        }

        return $this->render('ObsCoreBundle:TypePub:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypePub entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ObsCoreBundle:TypePub')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TypePub entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('typepub'));
    }

    /**
     * Creates a form to delete a TypePub entity by id.
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
