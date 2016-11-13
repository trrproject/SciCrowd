<?php

namespace Obs\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PublicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('year')
            ->add('volume')
            ->add('number')
            ->add('pages')
            ->add('edition')
            ->add('keywords')
            ->add('doi')
            ->add('approvedFlag')
            ->add('ISN')
            ->add('typepubs')
            ->add('isntypes')
            ->add('publishers')
            ->add('authors')
            ->add('editors')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Obs\CoreBundle\Entity\Publication'
        ));
    }

    public function getName()
    {
        return 'obs_corebundle_publicationtype';
    }
}
