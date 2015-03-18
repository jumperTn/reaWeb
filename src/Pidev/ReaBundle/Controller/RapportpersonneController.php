<?php

namespace Pidev\ReaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\ReaBundle\Entity\Rapportpersonne;
use Pidev\ReaBundle\Form\RapportpersonneType;

/**
 * Rapportpersonne controller.
 *
 */
class RapportpersonneController extends Controller
{

    /**
     * Lists all Rapportpersonne entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PidevReaBundle:Rapportpersonne')->findAll();

        return $this->render('PidevReaBundle:Rapportpersonne:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Rapportpersonne entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Rapportpersonne();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rapportpersonne_show', array('id' => $entity->getId())));
        }

        return $this->render('PidevReaBundle:Rapportpersonne:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Rapportpersonne entity.
     *
     * @param Rapportpersonne $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Rapportpersonne $entity)
    {
        $form = $this->createForm(new RapportpersonneType(), $entity, array(
            'action' => $this->generateUrl('rapportpersonne_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Rapportpersonne entity.
     *
     */
    public function newAction()
    {
        $entity = new Rapportpersonne();
        $form   = $this->createCreateForm($entity);

        return $this->render('PidevReaBundle:Rapportpersonne:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rapportpersonne entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Rapportpersonne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapportpersonne entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Rapportpersonne:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Rapportpersonne entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Rapportpersonne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapportpersonne entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Rapportpersonne:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Rapportpersonne entity.
    *
    * @param Rapportpersonne $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Rapportpersonne $entity)
    {
        $form = $this->createForm(new RapportpersonneType(), $entity, array(
            'action' => $this->generateUrl('rapportpersonne_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Rapportpersonne entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Rapportpersonne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapportpersonne entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('rapportpersonne_edit', array('id' => $id)));
        }

        return $this->render('PidevReaBundle:Rapportpersonne:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Rapportpersonne entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PidevReaBundle:Rapportpersonne')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rapportpersonne entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rapportpersonne'));
    }

    /**
     * Creates a form to delete a Rapportpersonne entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rapportpersonne_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
