<?php

namespace Obs\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Obs\CoreBundle\Entity\Publisher;
use Obs\CoreBundle\Form\PublisherType;

/**
 * Publisher controller.
 *
 */
class PublisherController extends Controller
{
    /**
     * Lists all Publisher entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ObsCoreBundle:Publisher')->findAll();

        return $this->render('ObsCoreBundle:Publisher:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Publisher entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Publisher();
        $form = $this->createForm(new PublisherType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('publisher_show', array('id' => $entity->getId())));
        }

        return $this->render('ObsCoreBundle:Publisher:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Publisher entity.
     *
     */
    public function newAction()
    {
        $entity = new Publisher();
        $form   = $this->createForm(new PublisherType(), $entity);

        return $this->render('ObsCoreBundle:Publisher:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Publisher entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Publisher')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publisher entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:Publisher:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Publisher entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Publisher')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publisher entity.');
        }

        $editForm = $this->createForm(new PublisherType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:Publisher:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Publisher entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Publisher')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publisher entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PublisherType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('publisher_edit', array('id' => $id)));
        }

        return $this->render('ObsCoreBundle:Publisher:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Publisher entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ObsCoreBundle:Publisher')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Publisher entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('publisher'));
    }

    /**
     * Creates a form to delete a Publisher entity by id.
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
