<?php

namespace Obs\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Obs\CoreBundle\Entity\Editor;
use Obs\CoreBundle\Form\EditorType;

/**
 * Editor controller.
 *
 */
class EditorController extends Controller
{
    /**
     * Lists all Editor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ObsCoreBundle:Editor')->findAll();

        return $this->render('ObsCoreBundle:Editor:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Editor entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Editor();
        $form = $this->createForm(new EditorType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('editor_show', array('id' => $entity->getId())));
        }

        return $this->render('ObsCoreBundle:Editor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Editor entity.
     *
     */
    public function newAction()
    {
        $entity = new Editor();
        $form   = $this->createForm(new EditorType(), $entity);

        return $this->render('ObsCoreBundle:Editor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Editor entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Editor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Editor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:Editor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Editor entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Editor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Editor entity.');
        }

        $editForm = $this->createForm(new EditorType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:Editor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Editor entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Editor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Editor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EditorType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('editor_edit', array('id' => $id)));
        }

        return $this->render('ObsCoreBundle:Editor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Editor entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ObsCoreBundle:Editor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Editor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('editor'));
    }

    /**
     * Creates a form to delete a Editor entity by id.
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
