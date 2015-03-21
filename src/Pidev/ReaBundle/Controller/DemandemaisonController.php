<?php

namespace Pidev\ReaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\ReaBundle\Entity\Demandemaison;
use Pidev\ReaBundle\Form\DemandemaisonType;

/**
 * Demandemaison controller.
 *
 */
class DemandemaisonController extends Controller
{

    /**
     * Lists all Demandemaison entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PidevReaBundle:Demandemaison')->findAll();

        return $this->render('PidevReaBundle:Demandemaison:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Demandemaison entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Demandemaison();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('demandemaison_show', array('id' => $entity->getIddemande())));
        }

        return $this->render('PidevReaBundle:Demandemaison:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Demandemaison entity.
     *
     * @param Demandemaison $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Demandemaison $entity)
    {
        $form = $this->createForm(new DemandemaisonType(), $entity, array(
            'action' => $this->generateUrl('demandemaison_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Demandemaison entity.
     *
     */
    public function newAction()
    {
        $entity = new Demandemaison();
        $form   = $this->createCreateForm($entity);

        return $this->render('PidevReaBundle:Demandemaison:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Demandemaison entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Demandemaison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demandemaison entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Demandemaison:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Demandemaison entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Demandemaison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demandemaison entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Demandemaison:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Demandemaison entity.
    *
    * @param Demandemaison $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Demandemaison $entity)
    {
        $form = $this->createForm(new DemandemaisonType(), $entity, array(
            'action' => $this->generateUrl('demandemaison_update', array('id' => $entity->getIddemande())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Demandemaison entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Demandemaison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demandemaison entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('demandemaison_edit', array('id' => $id)));
        }

        return $this->render('PidevReaBundle:Demandemaison:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Demandemaison entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PidevReaBundle:Demandemaison')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Demandemaison entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('demandemaison'));
    }

    /**
     * Creates a form to delete a Demandemaison entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('demandemaison_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
