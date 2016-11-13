<?php

namespace Obs\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Obs\CoreBundle\Entity\Institution;
use Obs\CoreBundle\Form\InstitutionType;

/**
 * Institution controller.
 *
 */
class InstitutionController extends Controller
{
    /**
     * Lists all Institution entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ObsCoreBundle:Institution')->findAll();

        return $this->render('ObsCoreBundle:Institution:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Institution entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Institution();
        $form = $this->createForm(new InstitutionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('institution_show', array('id' => $entity->getId())));
        }

        return $this->render('ObsCoreBundle:Institution:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Institution entity.
     *
     */
    public function newAction()
    {
        $entity = new Institution();
        $form   = $this->createForm(new InstitutionType(), $entity);

        return $this->render('ObsCoreBundle:Institution:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Institution entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Institution')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Institution entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:Institution:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Institution entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Institution')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Institution entity.');
        }

        $editForm = $this->createForm(new InstitutionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:Institution:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Institution entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:Institution')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Institution entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new InstitutionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('institution_edit', array('id' => $id)));
        }

        return $this->render('ObsCoreBundle:Institution:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Institution entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ObsCoreBundle:Institution')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Institution entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('institution'));
    }

    /**
     * Creates a form to delete a Institution entity by id.
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
