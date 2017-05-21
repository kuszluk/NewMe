<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ListType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $colors = [
            'Niebieski' => 'aqua',
            'Czerwony' => 'red',
            'Żółty' => 'yellow',
            'Zielony' => 'green',
        ];

        $icons = [
            html_entity_decode('&#xf024;')=> 'fa-flag'           ,
            html_entity_decode('&#xf006;') => 'fa-star-o'         ,
            html_entity_decode('&#xf291;') => 'fa-shopping-basket',
            html_entity_decode('&#xf007;') => 'fa-user'           ,
            html_entity_decode('&#xf196;') => 'fa-plus-square-o'  ,
            html_entity_decode('&#xf040;') => 'fa-pencil'         ,
            html_entity_decode('&#xf1fc;') => 'fa-paint-brush'    ,
            html_entity_decode('&#xf21c;') => 'fa-motorcycle'     ,
            html_entity_decode('&#xf0d6;') => 'fa-money'          ,
            html_entity_decode('&#xf080;') => 'fa-bar-chart'      ,
            html_entity_decode('&#xf073;') => 'fa-calendar'       ,
        ];


        $builder
            ->add('title', TextType::class, [
                'label'  => 'Nazwa listy',
            ])
            ->add('color', ChoiceType::class,[
                'label'  => 'Kolor',
                'choices'  => $colors,
            ])
            ->add('icon', ChoiceType::class,[
                'label'  => 'Ikona',
                'choices'  => $icons
            ])
            ->add('dateExp', DateType::class, [
                'label'  => 'Data zakończenia',
            ])
            ->add('Zapisz', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success pull-right'
                ]
            ]);

    }
}