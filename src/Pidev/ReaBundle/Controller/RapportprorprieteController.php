<?php

namespace Pidev\ReaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\ReaBundle\Entity\Rapportprorpriete;
use Pidev\ReaBundle\Form\RapportprorprieteType;

/**
 * Rapportprorpriete controller.
 *
 */
class RapportprorprieteController extends Controller
{

    /**
     * Lists all Rapportprorpriete entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PidevReaBundle:Rapportprorpriete')->findAll();

        return $this->render('PidevReaBundle:Rapportprorpriete:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Rapportprorpriete entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Rapportprorpriete();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rapportprorpriete_show', array('id' => $entity->getId())));
        }

        return $this->render('PidevReaBundle:Rapportprorpriete:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Rapportprorpriete entity.
     *
     * @param Rapportprorpriete $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Rapportprorpriete $entity)
    {
        $form = $this->createForm(new RapportprorprieteType(), $entity, array(
            'action' => $this->generateUrl('rapportprorpriete_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Rapportprorpriete entity.
     *
     */
    public function newAction()
    {
        $entity = new Rapportprorpriete();
        $form   = $this->createCreateForm($entity);

        return $this->render('PidevReaBundle:Rapportprorpriete:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rapportprorpriete entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Rapportprorpriete')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapportprorpriete entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Rapportprorpriete:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Rapportprorpriete entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Rapportprorpriete')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapportprorpriete entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Rapportprorpriete:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Rapportprorpriete entity.
    *
    * @param Rapportprorpriete $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Rapportprorpriete $entity)
    {
        $form = $this->createForm(new RapportprorprieteType(), $entity, array(
            'action' => $this->generateUrl('rapportprorpriete_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Rapportprorpriete entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Rapportprorpriete')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapportprorpriete entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('rapportprorpriete_edit', array('id' => $id)));
        }

        return $this->render('PidevReaBundle:Rapportprorpriete:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Rapportprorpriete entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PidevReaBundle:Rapportprorpriete')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rapportprorpriete entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rapportprorpriete'));
    }

    /**
     * Creates a form to delete a Rapportprorpriete entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rapportprorpriete_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
