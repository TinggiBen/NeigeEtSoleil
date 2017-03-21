<?php

namespace NeigeEtSoleilBundle\Controller;

use NeigeEtSoleilBundle\Entity\Appartements;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Appartement controller.
 *
 */
class AppartementsAdminController extends Controller
{
    /**
     * Lists all appartement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $appartements = $em->getRepository('NeigeEtSoleilBundle:Appartements')->findAll();

        return $this->render('NeigeEtSoleilBundle:Backend:appartements/layout/index.html.twig', array(
            'appartements' => $appartements,
        ));
    }

    /**
     * Creates a new appartement entity.
     *
     */
    public function newAction(Request $request)
    {
        $appartement = new Appartements();
        $form = $this->createForm('NeigeEtSoleilBundle\Form\AppartementsType', $appartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($appartement);
            $em->flush($appartement);

            return $this->redirectToRoute('adminAppartements_show', array('id' => $appartement->getId()));
        }

        return $this->render('NeigeEtSoleilBundle:Backend:appartements/layout/new.html.twig', array(
            'appartement' => $appartement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a appartement entity.
     *
     */
    public function showAction(Appartements $appartement)
    {
        $deleteForm = $this->createDeleteForm($appartement);

        return $this->render('NeigeEtSoleilBundle:Backend:appartements/layout/show.html.twig', array(
            'appartement' => $appartement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing appartement entity.
     *
     */
    public function editAction(Request $request, Appartements $appartement)
    {
        $deleteForm = $this->createDeleteForm($appartement);
        $editForm = $this->createForm('NeigeEtSoleilBundle\Form\AppartementsType', $appartement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('adminAppartements_edit', array('id' => $appartement->getId()));
        }

        return $this->render('NeigeEtSoleilBundle:Backend:appartements/layout/edit.html.twig', array(
            'appartement' => $appartement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a appartement entity.
     *
     */
    public function deleteAction(Request $request, Appartements $appartement)
    {
        $form = $this->createDeleteForm($appartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($appartement);
            $em->flush($appartement);
        }

        return $this->redirectToRoute('adminAppartements_index');
    }

    /**
     * Creates a form to delete a appartement entity.
     *
     * @param Appartements $appartement The appartement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Appartements $appartement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminAppartements_delete', array('id' => $appartement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
