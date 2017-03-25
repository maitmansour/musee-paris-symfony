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
public function newAction(Request $request)
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
  * Show Ten Musees
  * @Route("/showTen", name="show_musees0")
  */
  public function showTenActionRedirect(Request $request)
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
    return $this->render('list.html.twig', array('pagination' => $pagination));

  }
  /**
  * Show Ten Musees
  * @Route("/showTen/{nbpage}", name="show_musees")
  */
  public function showTenAction($nbpage,Request $request)
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
    return $this->render('list.html.twig', array('pagination' => $pagination));

/*
    if (!$musee0) {
      throw $this->createNotFoundException(
        'AUCUN MUSEE N\'EST TROUVEE'
        );
    }

    $musee =array();
    foreach ($musee0 as $key => $value) {
      $musee[ $musee0[$key]->getId()]=$value;
    }

    //Remplissage de tableau des musees à afficher
    $tableauDeMusee= array();
    for ($i=$nbpage; $i < $nbpage+10; $i++) { 
      array_push($tableauDeMusee, array('id'=> $musee[$i]->getId(),'nom'=>$musee[$i]->getNom(),'adresse'=>$musee[$i]->getAdresse(),'key'=>'/showMusee/'.$musee[$i]->getId()));
    }

    //Pour le deplacements entre les pages des musees( page de 10 )
    $dernier=max(array_keys($musee))-10;
    $debut=min(array_keys($musee));
    $precedent=$nbpage-10<0?0:$nbpage-10;
    $suivant=$nbpage+10>$dernier?$dernier:$nbpage+10;

    return $this->render('showTen.html.twig',array( 'tableau' => $tableauDeMusee, 'debut' => $debut,'precedent' => $precedent,'suivant' => $suivant,'dernier' =>$dernier));*/
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
  * @Route("/showMusee/{id}", name="show_musee")
  *@Method({"GET", "POST"})
  */
  public function showMuseeAction($id,Request $request)
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

    $urlRetour="showTen/".$id;
    return $this->render('showMusee.html.twig',array('lat'=>$lat,'lon'=>$lon,'note'=>$note,'musee' => $musee,'comments' => $comments, 'retour' =>$urlRetour,'form' => $form->createView()));

  }


   /**
  * @Route("/parArr/{id}", name="par_arr")
  */
   public function parArrondissementAction($id,Request $request)
   {
    $nbpage=2;

    //Les arrondissmeents de paris
    $musee = $this->getDoctrine()
    ->getRepository('AppBundle:Musee')
    ->findByArrondissement($id);

    if (!$musee) {
      throw $this->createNotFoundException(
        'AUCUN MUSEE N\'EST TROUVEE'
        );
    }

    var_dump($musee);
    exit();


    //Remplissage de tableau des musees à afficher
    $tableauDeMusee= array();
    for ($i=$nbpage; $i < $nbpage+3; $i++) { 
      array_push($tableauDeMusee, array('id'=> $i,'nom'=>$musee[$i]->getNom(),'adresse'=>$musee[$i]->getAdresse(),'key'=>'/showMusee/'.$i));
    }

    //Pour le deplacements entre les pages des musees( page de 10 )
    $dernier=count($musee)-3;
    $debut=0;
    $precedent=$nbpage-3<0?0:$nbpage-3;
    $suivant=$nbpage+3>$dernier?$dernier:$nbpage+3;

    return $this->render('showTen.html.twig',array('tableau' => $tableauDeMusee, 'debut' => $debut,'precedent' => $precedent,'suivant' => $suivant,'dernier' =>$dernier));
  }

   /**
   *Selection de l'arrondissement 
  * @Route("/Arrondissement", name="arrondissements")
  */
   public function ArrondissementAction(Request $request)
   {

    return $this->render('arrondissement.html.twig');
  }

   /**
   *Selection de l'arrondissement 
  * @Route("/parisArrondissement/{id}", name="Paris")
  */
   public function parisArrondissementAction($id,Request $request)
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


    //var_dump($musee);
   // exit();

     return $this->render('showArrondissement.html.twig', array('tableau'=>$musee,'ar'=>$id));
   }
 }