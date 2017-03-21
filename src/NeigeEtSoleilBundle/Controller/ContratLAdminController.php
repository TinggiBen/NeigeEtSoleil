<?php

namespace NeigeEtSoleilBundle\Controller;

use NeigeEtSoleilBundle\Entity\ContratL;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Contratl controller.
 *
 */
class ContratLAdminController extends Controller
{
    /**
     * Lists all contratL entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contratLs = $em->getRepository('NeigeEtSoleilBundle:ContratL')->findAll();

        return $this->render('NeigeEtSoleilBundle:Backend:contratl/layout/index.html.twig', array(
            'contratLs' => $contratLs,
        ));
    }

    /**
     * Creates a new contratL entity.
     *
     */
    public function newAction(Request $request)
    {
        $contratL = new Contratl();
        $form = $this->createForm('NeigeEtSoleilBundle\Form\ContratLType', $contratL);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contratL);
            $em->flush($contratL);

            return $this->redirectToRoute('adminContratL_show', array('id' => $contratL->getId()));
        }

        return $this->render('NeigeEtSoleilBundle:Backend:contratl/layout/new.html.twig', array(
            'contratL' => $contratL,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a contratL entity.
     *
     */
    public function showAction(ContratL $contratL)
    {
        $deleteForm = $this->createDeleteForm($contratL);

        return $this->render('NeigeEtSoleilBundle:Backend:contratl/layout/show.html.twig', array(
            'contratL' => $contratL,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contratL entity.
     *
     */
    public function editAction(Request $request, ContratL $contratL)
    {
        $deleteForm = $this->createDeleteForm($contratL);
        $editForm = $this->createForm('NeigeEtSoleilBundle\Form\ContratLType', $contratL);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('adminContratL_edit', array('id' => $contratL->getId()));
        }

        return $this->render('NeigeEtSoleilBundle:Backend:contratl/layout/edit.html.twig', array(
            'contratL' => $contratL,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contratL entity.
     *
     */
    public function deleteAction(Request $request, ContratL $contratL)
    {
        $form = $this->createDeleteForm($contratL);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contratL);
            $em->flush($contratL);
        }

        return $this->redirectToRoute('adminContratL_index');
    }

    /**
     * Creates a form to delete a contratL entity.
     *
     * @param ContratL $contratL The contratL entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ContratL $contratL)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminContratL_delete', array('id' => $contratL->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
