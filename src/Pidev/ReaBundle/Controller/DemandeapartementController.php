<?php

namespace Pidev\ReaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\ReaBundle\Entity\Demandeapartement;
use Pidev\ReaBundle\Form\DemandeapartementType;

/**
 * Demandeapartement controller.
 *
 */
class DemandeapartementController extends Controller
{

    /**
     * Lists all Demandeapartement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PidevReaBundle:Demandeapartement')->findAll();

        return $this->render('PidevReaBundle:Demandeapartement:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Demandeapartement entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Demandeapartement();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('demandeapartement_show', array('id' => $entity->getIddemande())));
        }

        return $this->render('PidevReaBundle:Demandeapartement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Demandeapartement entity.
     *
     * @param Demandeapartement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Demandeapartement $entity)
    {
        $form = $this->createForm(new DemandeapartementType(), $entity, array(
            'action' => $this->generateUrl('demandeapartement_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Demandeapartement entity.
     *
     */
    public function newAction()
    {
        $entity = new Demandeapartement();
        $form   = $this->createCreateForm($entity);

        return $this->render('PidevReaBundle:Demandeapartement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Demandeapartement entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Demandeapartement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demandeapartement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Demandeapartement:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Demandeapartement entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Demandeapartement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demandeapartement entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Demandeapartement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Demandeapartement entity.
    *
    * @param Demandeapartement $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Demandeapartement $entity)
    {
        $form = $this->createForm(new DemandeapartementType(), $entity, array(
            'action' => $this->generateUrl('demandeapartement_update', array('id' => $entity->getIddemande())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Demandeapartement entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Demandeapartement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demandeapartement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('demandeapartement_edit', array('id' => $id)));
        }

        return $this->render('PidevReaBundle:Demandeapartement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Demandeapartement entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PidevReaBundle:Demandeapartement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Demandeapartement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('demandeapartement'));
    }

    /**
     * Creates a form to delete a Demandeapartement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('demandeapartement_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
