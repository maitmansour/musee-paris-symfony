<?php
// src/AppBundle/Form/MuseeType.php

namespace AppBundle\Form;
use AppBundle\Entity\Musee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;

class MuseeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
     $builder
     ->add('nom')
     ->add('coordonnees', TextType::class)
     ->add('statut', ChoiceType::class, array(
        'choices' => array(
            Musee::OUVERT => Musee::OUVERT ,
            Musee::FERME => Musee::FERME
            )))
     ->add('siteWeb', UrlType::class, ['required' => false])
     ->add('adresse', TextType::class, ['required' => false])
     ->add('codePostal', TextType::class,['required' => false])
     ->add('ville', TextType::class,['required' => false])
     ->add('reouverture', TextType::class,['required' => false])
     ->add('fermetureAnnuelle', TextType::class,['required' => false])
     ->add('periodesOuverture', TextType::class,['required' => false])
     ->add('Enregistrer', SubmitType::class, array(
    'attr' => array('class' => 'btn btn-success btn-lg btn-block')))
     ;


 }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Musee'
            ));
    }
}

