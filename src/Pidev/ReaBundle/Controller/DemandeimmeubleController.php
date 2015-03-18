<?php

namespace Pidev\ReaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\ReaBundle\Entity\Demandeimmeuble;
use Pidev\ReaBundle\Form\DemandeimmeubleType;

/**
 * Demandeimmeuble controller.
 *
 */
class DemandeimmeubleController extends Controller
{

    /**
     * Lists all Demandeimmeuble entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PidevReaBundle:Demandeimmeuble')->findAll();

        return $this->render('PidevReaBundle:Demandeimmeuble:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Demandeimmeuble entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Demandeimmeuble();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('demandeimmeuble_show', array('id' => $entity->getId())));
        }

        return $this->render('PidevReaBundle:Demandeimmeuble:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Demandeimmeuble entity.
     *
     * @param Demandeimmeuble $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Demandeimmeuble $entity)
    {
        $form = $this->createForm(new DemandeimmeubleType(), $entity, array(
            'action' => $this->generateUrl('demandeimmeuble_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Demandeimmeuble entity.
     *
     */
    public function newAction()
    {
        $entity = new Demandeimmeuble();
        $form   = $this->createCreateForm($entity);

        return $this->render('PidevReaBundle:Demandeimmeuble:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Demandeimmeuble entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Demandeimmeuble')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demandeimmeuble entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Demandeimmeuble:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Demandeimmeuble entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Demandeimmeuble')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demandeimmeuble entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Demandeimmeuble:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Demandeimmeuble entity.
    *
    * @param Demandeimmeuble $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Demandeimmeuble $entity)
    {
        $form = $this->createForm(new DemandeimmeubleType(), $entity, array(
            'action' => $this->generateUrl('demandeimmeuble_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Demandeimmeuble entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Demandeimmeuble')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demandeimmeuble entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('demandeimmeuble_edit', array('id' => $id)));
        }

        return $this->render('PidevReaBundle:Demandeimmeuble:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Demandeimmeuble entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PidevReaBundle:Demandeimmeuble')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Demandeimmeuble entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('demandeimmeuble'));
    }

    /**
     * Creates a form to delete a Demandeimmeuble entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('demandeimmeuble_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
