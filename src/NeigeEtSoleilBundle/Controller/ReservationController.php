<?php

namespace NeigeEtSoleilBundle\Controller;

use NeigeEtSoleilBundle\Entity\ContratL;
use NeigeEtSoleilBundle\Entity\Appartements;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReservationController extends Controller
{
    /**
     * @Route("/appartements/{id}")
     */
    public function ReservationAction(Request $request, Appartements $appartements)
    {
        $contratL = new ContratL();
        $form = $this->createFormBuilder($contratL)
            ->add('dateDebutCL', DateType::class, array('label'=>'Date d\'arrivée'))
            ->add('dateFinCL', DateType::class, array('label'=>'Date de départ'))
            ->add('save', SubmitType::class, array('label'=>'Réserver'))
            ->getForm();
        
   $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        
        $datedcl = $form['dateDebutCL']->getData();
        $datefcl = $form['dateFinCL']->getData();
        
        $contratL->setDateDebutCL($datedcl);
        $contratL->setDateFinCL($datefcl);
        
        $user= $this->get('security.token_storage')->getToken()->getUser(); // get the current user
        $contratL->setTiers($user); // set the current user
        $contratL->setAppartements($appartements);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($contratL);
        $em->flush();
        
        return $this->redirect( $this->generateUrl('Appartements') );

    }
    
        return $this->render('NeigeEtSoleilBundle:Frontend:Appartements/Layout/Reservation.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}