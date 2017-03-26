<?php
// src/AppBundle/Controller/MuseeController.php

namespace AppBundle\Controller;
use AppBundle\Form\MuseeType;
use AppBundle\Entity\Commentaire;
use AppBundle\Entity\Musee;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class CommentaireController extends Controller
{

    /**
  * Calcul note 
  */
    public function calculNote($comments=array())
    {

    	$note=0.00;
    	$nbAuteur=0;
    	if (isset($comments)) {
    		foreach ($comments as $key => $value) {
    			$note+=$value['note'];
    			$nbAuteur++;
    		}
    		if ($nbAuteur>0) {
    			$note=$note/$nbAuteur;
    		}
    	}
    	return $note;
    }

  /**
  * Show one musee with informations
  * @Route("/unMusee/{id}/comment", name="un_musee_commenter")
  *@Method({"GET", "POST"})
  */
  public function commenter($id, Request $request)
  {
  	$this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

    //Récupération de musee par son id
  	$musee = $this->getDoctrine()
  	->getRepository('AppBundle:Musee')
  	->find($id);
    	//Géneration de formulaire des commentaires
  	$commentaire = new Commentaire();
  	$form = $this->createForm('AppBundle\Form\CommentaireType', $commentaire);

    //Traitements des informations de formulaire
  	$form->handleRequest($request);
  	if ($form->isSubmitted() && $form->isValid()) {
  		$manager = $this->getDoctrine()->getManager();
  		$commentaire->setDate(new \DateTime("now"));
  		$commentaire->setAuteur($this->getUser()->getNom());
  		$commentaire->setMusee($musee);
  		$manager->persist($commentaire);
  		$manager->flush();

      //Retour vers la page du musee
  		//return $this->redirect($request->getUri());
  		return $this->redirect('/unMusee/'.$id);

  	}
  	return $this->render('commenter.html.twig',array('id'=>$id,'form'=>$form->createView()));


  }

}