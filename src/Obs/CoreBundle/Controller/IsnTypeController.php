<?php

namespace Obs\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Obs\CoreBundle\Entity\IsnType;
use Obs\CoreBundle\Form\IsnTypeType;

/**
 * IsnType controller.
 *
 */
class IsnTypeController extends Controller
{
    /**
     * Lists all IsnType entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ObsCoreBundle:IsnType')->findAll();

        return $this->render('ObsCoreBundle:IsnType:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new IsnType entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new IsnType();
        $form = $this->createForm(new IsnTypeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('isntype_show', array('id' => $entity->getId())));
        }

        return $this->render('ObsCoreBundle:IsnType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new IsnType entity.
     *
     */
    public function newAction()
    {
        $entity = new IsnType();
        $form   = $this->createForm(new IsnTypeType(), $entity);

        return $this->render('ObsCoreBundle:IsnType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a IsnType entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:IsnType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find IsnType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:IsnType:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing IsnType entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:IsnType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find IsnType entity.');
        }

        $editForm = $this->createForm(new IsnTypeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ObsCoreBundle:IsnType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing IsnType entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ObsCoreBundle:IsnType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find IsnType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new IsnTypeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('isntype_edit', array('id' => $id)));
        }

        return $this->render('ObsCoreBundle:IsnType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a IsnType entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ObsCoreBundle:IsnType')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find IsnType entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('isntype'));
    }

    /**
     * Creates a form to delete a IsnType entity by id.
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
