<?php
// src/AppBundle/Controller/MuseeController.php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


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
  public function showMuseeAction($id,Request $request)
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

    $form = $this->createFormBuilder()
    ->add('auteur', TextType::class)
    ->add('Commentaire', TextType::class)
    ->add('Note', TextType::class)
    ->add('Valider', SubmitType::class, array('label' => 'Commenter'))
    ->getForm();


    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

      var_dump($form);

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
        // $em = $this->getDoctrine()->getManager();
        // $em->persist($task);
        // $em->flush();

      return $this->redirectToRoute('task_success');
    }
    return $this->render('showMusee.html.twig',array('musee' => $musee, 'retour' =>$urlRetour,'form' => $form->createView()));

  }

}