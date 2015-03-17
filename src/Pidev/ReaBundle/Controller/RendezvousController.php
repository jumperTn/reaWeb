<?php

namespace Pidev\ReaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\ReaBundle\Entity\Rendezvous;
use Pidev\ReaBundle\Form\RendezvousType;

/**
 * Rendezvous controller.
 *
 */
class RendezvousController extends Controller
{

    /**
     * Lists all Rendezvous entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PidevReaBundle:Rendezvous')->findAll();

        return $this->render('PidevReaBundle:Rendezvous:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Rendezvous entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Rendezvous();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rendezvous_show', array('id' => $entity->getId())));
        }

        return $this->render('PidevReaBundle:Rendezvous:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Rendezvous entity.
     *
     * @param Rendezvous $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Rendezvous $entity)
    {
        $form = $this->createForm(new RendezvousType(), $entity, array(
            'action' => $this->generateUrl('rendezvous_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Rendezvous entity.
     *
     */
    public function newAction()
    {
        $entity = new Rendezvous();
        $form   = $this->createCreateForm($entity);

        return $this->render('PidevReaBundle:Rendezvous:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rendezvous entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Rendezvous')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rendezvous entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Rendezvous:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Rendezvous entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Rendezvous')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rendezvous entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Rendezvous:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Rendezvous entity.
    *
    * @param Rendezvous $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Rendezvous $entity)
    {
        $form = $this->createForm(new RendezvousType(), $entity, array(
            'action' => $this->generateUrl('rendezvous_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Rendezvous entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Rendezvous')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rendezvous entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('rendezvous_edit', array('id' => $id)));
        }

        return $this->render('PidevReaBundle:Rendezvous:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Rendezvous entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PidevReaBundle:Rendezvous')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rendezvous entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rendezvous'));
    }

    /**
     * Creates a form to delete a Rendezvous entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rendezvous_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
