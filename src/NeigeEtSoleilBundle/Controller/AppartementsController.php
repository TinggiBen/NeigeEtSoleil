<?php

namespace NeigeEtSoleilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AppartementsController extends Controller
{
    public function AppartementsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $appartements = $em->getRepository('NeigeEtSoleilBundle:Appartements')->findAll();
        
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
                $appartements,
                $request->query->getInt('page', 1), //Page par defaut
                $request->query->getInt('limit', 9) // Limite d'appartements par page
                );
        return $this->render('NeigeEtSoleilBundle:Frontend:Appartements/Layout/Appartements.html.twig', array('appartements' => $result));
    }
    
    public function PresentationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $appartement = $em->getRepository('NeigeEtSoleilBundle:Appartements')->find($id);
        return $this->render('NeigeEtSoleilBundle:Frontend:Appartements/Layout/Presentation.html.twig', array('appartement' => $appartement));
    }
}
