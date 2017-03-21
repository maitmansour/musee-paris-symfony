<?php
// src/AppBundle/Form/MuseeType.php

namespace AppBundle\Form;
use AppBundle\Entity\Commentaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;

class CommentaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
     $builder
     ->add('auteur', TextType::class)
    ->add('contenu', TextType::class)
    ->add('Note',  ChoiceType::class, array(
      'choices'  => array(
        '1' =>1 ,
        '2' =>2 ,
        '3' =>3 ,
        '4' =>4 ,
        '5' =>5 ,
        )))
    ->add('Valider', SubmitType::class, array('label' => 'Commenter'))
     ;


 }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Commentaire'
            ));
    }
}

