<?php

namespace Pidev\ReaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\ReaBundle\Entity\Immeuble;
use Pidev\ReaBundle\Form\ImmeubleType;

/**
 * Immeuble controller.
 *
 */
class ImmeubleController extends Controller
{

    /**
     * Lists all Immeuble entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PidevReaBundle:Immeuble')->findAll();

        return $this->render('PidevReaBundle:Immeuble:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Immeuble entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Immeuble();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('immeuble_show', array('id' => $entity->getIdoffre())));
        }

        return $this->render('PidevReaBundle:Immeuble:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Immeuble entity.
     *
     * @param Immeuble $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Immeuble $entity)
    {
        $form = $this->createForm(new ImmeubleType(), $entity, array(
            'action' => $this->generateUrl('immeuble_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Immeuble entity.
     *
     */
    public function newAction()
    {
        $entity = new Immeuble();
        $form   = $this->createCreateForm($entity);

        return $this->render('PidevReaBundle:Immeuble:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Immeuble entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Immeuble')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Immeuble entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Immeuble:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Immeuble entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Immeuble')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Immeuble entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Immeuble:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Immeuble entity.
    *
    * @param Immeuble $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Immeuble $entity)
    {
        $form = $this->createForm(new ImmeubleType(), $entity, array(
            'action' => $this->generateUrl('immeuble_update', array('id' => $entity->getIdoffre())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Immeuble entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Immeuble')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Immeuble entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('immeuble_edit', array('id' => $id)));
        }

        return $this->render('PidevReaBundle:Immeuble:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Immeuble entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PidevReaBundle:Immeuble')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Immeuble entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('immeuble'));
    }

    /**
     * Creates a form to delete a Immeuble entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('immeuble_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
