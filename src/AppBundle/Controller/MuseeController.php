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


class MuseeController extends Controller
{


/**
  * Creates a new Musee entity.
  *@Method({"GET", "POST"})
  * @Route("/new", name="new_musee")
  */
public function newMuseeAction(Request $request)
{

  //Géneration de form
 $musee = new Musee();
 $form = $this->createForm('AppBundle\Form\MuseeType', $musee);

 //Traitement des informations de formulaire
 $form->handleRequest($request);
 if ($form->isSubmitted() && $form->isValid()) {
  $manager = $this->getDoctrine()->getManager();
  $manager->persist($musee);
  $manager->flush();

  return $this->redirect('/');
}

return $this->render('newMusee.html.twig', array(
 'form' => $form->createView(),
 ));

}

  /**
  * Afficher 10 Musees
  * @Route("/liste", name="liste_musees")
  */
  public function listeMuseeAction(Request $request)
  {
   $musee = $this->getDoctrine()
   ->getRepository('AppBundle:Musee')
   ->findAll();

   $paginator  = $this->get('knp_paginator');
   $pagination = $paginator->paginate(
    $musee,
    $request->query->get('page', 1)/*page number*/,
    10/*limit per page*/
    );
   return $this->render('liste.html.twig', array('pagination' => $pagination));

 }

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
  * @Route("/unMusee/{id}", name="un_musee")
  *@Method({"GET", "POST"})
  */
  public function unMuseeAction($id,Request $request)
  {
    //Récupération de musee par son id
    $musee = $this->getDoctrine()
    ->getRepository('AppBundle:Musee')
    ->find($id);

    //Récupération des commentaires de musee récupéré et calcul de note
    $comments = $this->getDoctrine()
    ->getRepository('AppBundle:Commentaire')
    ->findByIdJoinedToMusee($id);
    $note= self::calculNote($comments);

    //extraction des coordonnées
    $latlon=explode(";", $musee->getCoordonnees());
    $lat=$latlon['0'];
    $lon=$latlon['1'];

    //Géneration de formulaire des commentaires
    $commentaire = new Commentaire();
    $form = $this->createForm('AppBundle\Form\CommentaireType', $commentaire);

    //Traitements des informations de formulaire
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $manager = $this->getDoctrine()->getManager();
      $commentaire->setDate(new \DateTime("now"));
      $commentaire->setMusee($musee);
      $manager->persist($commentaire);
      $manager->flush();

      //Retour vers la page du musee
      return $this->redirect($request->getUri());
    }

    $urlRetour="liste";
    return $this->render('unMusee.html.twig',array('lat'=>$lat,'lon'=>$lon,'note'=>$note,'musee' => $musee,'comments' => $comments, 'retour' =>$urlRetour,'form' => $form->createView()));

  }

   /**
   *Selection de l'arrondissement 
  * @Route("/paris", name="paris_arrondissements")
  */
   public function ArrondissementMuseeAction(Request $request)
   {
    return $this->render('paris.html.twig');
  }

   /**
   *Selection de l'arrondissement 
  * @Route("/parisArrondissement/{id}", name="Paris")
  */
   public function parisArrondissementMuseeAction($id,Request $request)
   {


    //Les arrondissmeents de paris
    $musee = $this->getDoctrine()
    ->getRepository('AppBundle:Musee')
    ->findByArrondissement($id);

    if (!$musee) {
      throw $this->createNotFoundException(
        'AUCUN MUSEE N\'EST TROUVEE'
        );
    }
    return $this->render('parisArrondissement.html.twig', array('tableau'=>$musee,'ar'=>$id));
  }
}