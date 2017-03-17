<?php
// src/AppBundle/Controller/MuseeController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class MuseeController extends Controller
{

  /**
  * @Route("/showTen/{nbpage}", name="musees_show")
  */
  public function showTenAction($nbpage)
  {
   // echo "tttttttttttttttttttttt  tt";
    $musee = $this->getDoctrine()
    ->getRepository('AppBundle:Musee')
    ->findAll();


    if (!$musee) {
      throw $this->createNotFoundException(
        'AUCUN MUSEE N\'EST TROUVEE'
        );
    }
      // nom ville et siteWb 
    $tableauDeMusee= array();

    for ($i=$nbpage; $i < $nbpage+10; $i++) { 
      array_push($tableauDeMusee, array('id'=> $i,'nom'=>$musee[$i]->getNom(),'adresse'=>$musee[$i]->getAdresse(),'key'=>'/showMusee/'.$i));
    }
    $dernier=count($musee)-10;
    $debut=0;
    $precedent=$nbpage-10<0?0:$nbpage-10;
    $suivant=$nbpage+10>$dernier?$dernier:$nbpage+10;


   /* foreach ($musee as $key => $value) {
      array_push($tableauDeMusee, array('nom'=>$value->getNom(),'adresse'=>$value->getAdresse(),'key'=>'showMusee/'.$key));
       // echo $value->getNom();
    }*/

   //   var_dump($tableauDeMusee);
    return $this->render('showTen.html.twig',array('tableau' => $tableauDeMusee, 'debut' => $debut,'precedent' => $precedent,'suivant' => $suivant,'dernier' =>$dernier));

  }
  /**
  * @Route("/showMusee/{id}", name="musee_show")
  */
  public function showMuseeAction($id)
  {
    $musee = $this->getDoctrine()
    ->getRepository('AppBundle:Musee')
    ->find($id);


    if (!$musee) {
      throw $this->createNotFoundException(
        'AUCUN MUSEE N\'EST TROUVEE'
        );
    }
    $urlRetour="showTen/".$id;

    return $this->render('showMusee.html.twig',array('musee' => $musee, 'retour' =>$urlRetour));

  }

}