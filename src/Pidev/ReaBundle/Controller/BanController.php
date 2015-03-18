<?php

namespace Pidev\ReaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\ReaBundle\Entity\Ban;
use Pidev\ReaBundle\Form\BanType;

/**
 * Ban controller.
 *
 */
class BanController extends Controller
{

    /**
     * Lists all Ban entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PidevReaBundle:Ban')->findAll();

        return $this->render('PidevReaBundle:Ban:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Ban entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Ban();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ban_show', array('id' => $entity->getId())));
        }

        return $this->render('PidevReaBundle:Ban:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Ban entity.
     *
     * @param Ban $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ban $entity)
    {
        $form = $this->createForm(new BanType(), $entity, array(
            'action' => $this->generateUrl('ban_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ban entity.
     *
     */
    public function newAction()
    {
        $entity = new Ban();
        $form   = $this->createCreateForm($entity);

        return $this->render('PidevReaBundle:Ban:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ban entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Ban')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ban entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Ban:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ban entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Ban')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ban entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Ban:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Ban entity.
    *
    * @param Ban $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ban $entity)
    {
        $form = $this->createForm(new BanType(), $entity, array(
            'action' => $this->generateUrl('ban_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Ban entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Ban')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ban entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ban_edit', array('id' => $id)));
        }

        return $this->render('PidevReaBundle:Ban:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Ban entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PidevReaBundle:Ban')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ban entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ban'));
    }

    /**
     * Creates a form to delete a Ban entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ban_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
