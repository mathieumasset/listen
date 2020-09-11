<?php

namespace App\Form\AdherentMessage;

use App\Entity\AdherentMessage\Filter\ReferentTerritorialCouncilFilter;
use App\Form\ManagedTerritorialCouncilChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReferentTerritorialCouncilFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('territorialCouncil', ManagedTerritorialCouncilChoiceType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ReferentTerritorialCouncilFilter::class,
        ]);
    }
}
