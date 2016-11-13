<?php

namespace Obs\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Obs\CoreBundle\Entity\Publication;
use Obs\CoreBundle\Form\PublicationType;

/**
 * Publication controller.
 *
 */
class PublicationController extends Controller
{
    /**
     * Lists all Publication entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ObsCoreBundle:Publication')->findAll();

        return $this->render('ObsCoreBundle:Publication:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Publication entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Publication();
        $form = $this->createForm(new PublicationType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('publication_show', array('id' => $entity->getId())));
        }

        return $this->render('ObsCoreBundle:Publication:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Publication entity.
     *
     */
    public function newAction()
    {
        $entity = new Publication();
        $form   = $this->createForm(new PublicationType(), $entity);

        return $this->render('ObsCoreBundle:Publication:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Publication entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Publication')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publication entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:Publication:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Publication entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Publication')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publication entity.');
        }

        $editForm = $this->createForm(new PublicationType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:Publication:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Publication entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Publication')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publication entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PublicationType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('publication_edit', array('id' => $id)));
        }

        return $this->render('ObsCoreBundle:Publication:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Publication entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ObsCoreBundle:Publication')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Publication entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('publication'));
    }

    /**
     * Creates a form to delete a Publication entity by id.
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
