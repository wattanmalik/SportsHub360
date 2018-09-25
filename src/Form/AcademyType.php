<?php

namespace App\Form;

use App\Entity\Academy;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AcademyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('AcademyName')
            ->add('Description')
            ->add('FacebookUrl')
            ->add('TwitterUrl')
            ->add('LinkedInUrl')
            ->add('ParentsWaitingArea')
            ->add('ConditionOfParentsWaitingArea')
            ->add('AgeGroupMinimum')
            ->add('AgeGroupMaximum')
            ->add('SportsId')
            ->add('OtherSports')
            ->add('openingHours')
            ->add('gallery')
            ->add('facilities')
            ->add('amenities')
            ->add('hostelFacility')
            ->add('staffDetails')
            ->add('tournaments')
            ->add('achievements')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Academy::class,
        ]);
    }
}
