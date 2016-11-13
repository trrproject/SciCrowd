<?php

namespace Obs\SecurityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsersEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('password','password')
            ->add('email')
            ->add('isActive')
            ->add('revogue')
            ->add('groups')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Obs\SecurityBundle\Entity\Users'
        ));
    }

    public function getName()
    {
        return 'obs_securitybundle_userstype';
    }
}
