<?php

namespace Pidev\ReaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\ReaBundle\Entity\Nouveau;
use Pidev\ReaBundle\Form\NouveauType;

/**
 * Nouveau controller.
 *
 */
class NouveauController extends Controller
{

    /**
     * Lists all Nouveau entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PidevReaBundle:Nouveau')->findAll();

        return $this->render('PidevReaBundle:Nouveau:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Nouveau entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Nouveau();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('nouveau_show', array('id' => $entity->getId())));
        }

        return $this->render('PidevReaBundle:Nouveau:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Nouveau entity.
     *
     * @param Nouveau $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Nouveau $entity)
    {
        $form = $this->createForm(new NouveauType(), $entity, array(
            'action' => $this->generateUrl('nouveau_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Nouveau entity.
     *
     */
    public function newAction()
    {
        $entity = new Nouveau();
        $form   = $this->createCreateForm($entity);

        return $this->render('PidevReaBundle:Nouveau:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Nouveau entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Nouveau')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Nouveau entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Nouveau:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Nouveau entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Nouveau')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Nouveau entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Nouveau:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Nouveau entity.
    *
    * @param Nouveau $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Nouveau $entity)
    {
        $form = $this->createForm(new NouveauType(), $entity, array(
            'action' => $this->generateUrl('nouveau_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Nouveau entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Nouveau')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Nouveau entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('nouveau_edit', array('id' => $id)));
        }

        return $this->render('PidevReaBundle:Nouveau:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Nouveau entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PidevReaBundle:Nouveau')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Nouveau entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('nouveau'));
    }

    /**
     * Creates a form to delete a Nouveau entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('nouveau_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
