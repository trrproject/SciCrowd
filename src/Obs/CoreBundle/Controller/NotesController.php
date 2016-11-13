<?php

namespace Obs\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Obs\CoreBundle\Entity\Notes;
use Obs\CoreBundle\Form\NotesType;

/**
 * Notes controller.
 *
 */
class NotesController extends Controller
{
    /**
     * Lists all Notes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ObsCoreBundle:Notes')->findAll();

        return $this->render('ObsCoreBundle:Notes:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Notes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Notes();
        $form = $this->createForm(new NotesType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('notes_show', array('id' => $entity->getId())));
        }

        return $this->render('ObsCoreBundle:Notes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Notes entity.
     *
     */
    public function newAction()
    {
        $entity = new Notes();
        $form   = $this->createForm(new NotesType(), $entity);

        return $this->render('ObsCoreBundle:Notes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Notes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Notes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Notes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:Notes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Notes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Notes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Notes entity.');
        }

        $editForm = $this->createForm(new NotesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:Notes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Notes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Notes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Notes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new NotesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('notes_edit', array('id' => $id)));
        }

        return $this->render('ObsCoreBundle:Notes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Notes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ObsCoreBundle:Notes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Notes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('notes'));
    }

    /**
     * Creates a form to delete a Notes entity by id.
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
