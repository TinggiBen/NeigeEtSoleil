<?php

namespace NeigeEtSoleilBundle\Controller;

use NeigeEtSoleilBundle\Entity\ContratL;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


/**
 * MesReservations controller.
 *
 */
class MesReservationsController extends Controller
{
    
    /**
     * Lists all contratL entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user= $this->get('security.token_storage')->getToken()->getUser();
        $contratLs = $em->getRepository('NeigeEtSoleilBundle:ContratL')->findByTiers($user);
        return $this->render('NeigeEtSoleilBundle:Frontend:MesReservations/Layout/index.html.twig', array(
            'contratLs' => $contratLs,
        ));
    }
    
    public function reservationPDFAction(ContratL $contratL)
    {
       $html = $this->renderView('NeigeEtSoleilBundle:Frontend:MesReservations/Layout/reservationPDF.html.twig', array('contratL' => $contratL));
         
       $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
       $html2pdf->pdf->SetAuthor('Neige Et Soleil');
       $html2pdf->pdf->SetSubject('Reservation Neige Et Soleil');
       $html2pdf->pdf->SetDisplayMode('real');
       $html2pdf->writeHTML($html);
       $html2pdf->Output('Reservation.pdf');
       
       $response = new Response();
       $response->headers->set('Content-type', 'application/pdf');
       
       return $response;
    }

    /**
     * Finds and displays a contratL entity.
     *
     */
    public function showAction(ContratL $contratL)
    {
        return $this->render('NeigeEtSoleilBundle:Frontend:MesReservations/Layout/show.html.twig', array(
            'contratL' => $contratL,
        ));
    }
}
