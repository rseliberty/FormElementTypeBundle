<?php

namespace Eliberty\Bundle\FormElementTypeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class InversedBooleanType
 * responsability: overload the text fields turning it into an "inversed" boolean style
 * ===> false is display as On and true is display as Off.
 */
class InversedBooleanType extends AbstractType
{
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'widget' => 'inversed_boolean_widget',
        ]);
    }

    /**
     * @return string|\Symfony\Component\Form\FormTypeInterface|null
     */
    public function getParent()
    {
        return TextType::class;
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'eliberty_inversed_boolean';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
