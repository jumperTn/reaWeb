<?php

namespace Pidev\ReaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\ReaBundle\Entity\Gallerie;
use Pidev\ReaBundle\Form\GallerieType;

/**
 * Gallerie controller.
 *
 */
class GallerieController extends Controller
{

    /**
     * Lists all Gallerie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PidevReaBundle:Gallerie')->findAll();

        return $this->render('PidevReaBundle:Gallerie:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Gallerie entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Gallerie();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('gallerie_show', array('id' => $entity->getIdimage())));
        }

        return $this->render('PidevReaBundle:Gallerie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Gallerie entity.
     *
     * @param Gallerie $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Gallerie $entity)
    {
        $form = $this->createForm(new GallerieType(), $entity, array(
            'action' => $this->generateUrl('gallerie_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Gallerie entity.
     *
     */
    public function newAction()
    {
        $entity = new Gallerie();
        $form   = $this->createCreateForm($entity);

        return $this->render('PidevReaBundle:Gallerie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Gallerie entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Gallerie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gallerie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Gallerie:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Gallerie entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Gallerie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gallerie entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevReaBundle:Gallerie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Gallerie entity.
    *
    * @param Gallerie $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Gallerie $entity)
    {
        $form = $this->createForm(new GallerieType(), $entity, array(
            'action' => $this->generateUrl('gallerie_update', array('id' => $entity->getIdimage())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Gallerie entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevReaBundle:Gallerie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gallerie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('gallerie_edit', array('id' => $id)));
        }

        return $this->render('PidevReaBundle:Gallerie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Gallerie entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PidevReaBundle:Gallerie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Gallerie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('gallerie'));
    }

    /**
     * Creates a form to delete a Gallerie entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gallerie_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
